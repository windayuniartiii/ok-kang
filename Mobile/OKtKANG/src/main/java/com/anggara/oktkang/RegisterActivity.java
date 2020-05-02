package com.anggara.oktkang;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;

public class RegisterActivity extends AppCompatActivity {
    private EditText edt_nama, edt_username, edt_password;
    private Button btn_sign;
    private static String URL_REGIST = "http://192.168.100.15/mekarphp/register.php";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        edt_nama = findViewById(R.id.edt_nama);
        edt_username = findViewById(R.id.edt_username);
        edt_password = findViewById(R.id.edt_password);
        btn_sign = findViewById(R.id.btn_sign)

        btn_sign.setOnClickListener(new View.OnClickListener(){
            @Override
                    public void onClick(View v){
                Regist();

            }
        });
    }

    private void Regist(){
        btn_sign.setVisibility(View.GONE);

        final String edt_nama = this.edt_nama.getText().toString().trim();
        final String edt_username = this.edt_username.getText().toString().trim();
        final String edt_password = this.edt_password.getText().toString().trim();

        StringRequest stringRequest = new StringRequest(Request.Method.POST, URL_REGIST, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                @Override
                        public void onResponse(String response){
                    try {
                        JSONObject jsonObject= = new JSONObject(response);
                        String success = jsonObject.getString("success");

                        if(success.equals("1")){
                            Toast.makeText(RegisterActivity.this, "Register Success", Toast.LENGTH_SHORT).show();
                        }
                    }catch (JSONException e){
                        e.printStackTrace();
                        Toast.makeText(RegisterActivity.this, "Register Error! " + e.toString(), Toast.LENGTH_SHORT).show();
                        btn_sign.setVisibility(View.VISIBLE);
                    }
                }
            },
            new Response.ErrorListener(){
                @Override
                        public void onErrorResponse(VolleyError error){
                    Toast.makeText(RegisterActivity.this, "Register Error! " + error.toString(), Toast.LENGTH_SHORT).show();
                    btn_sign.setVisibility(View.VISIBLE);
                }
            })
        })
        {
            @Override
            protected Map<String, String> getParams() throws AuthFailureError{
                Map<String, String> params = new HashMap<>();
                params.put("nama", edt_nama);
                params.put("username", edt_username);
                params.put("password", edt_password);
                return params;
            }
        };

        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);
    }
}
