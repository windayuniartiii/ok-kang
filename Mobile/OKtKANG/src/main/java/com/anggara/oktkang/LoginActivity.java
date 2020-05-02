package com.anggara.oktkang;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.lang.ref.ReferenceQueue;
import java.util.HashMap;
import java.util.Map;

public class LoginActivity extends AppCompatActivity {

    private EditText username, password;
    private Button btn_sign;
    private static String URL_LOGIN = "http://192.168.100.15/mekarphp/login.php";
    SessionManager sessionManager;

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        sessionManager = new SessionManager(this);

        username = findViewById(R.id.username);
        password = findViewById(R.id.password);
        btn_sign = findViewById(R.id.btn_sign);

        btn_sign.setOnClickListener(new View.onClickListener(){
            @Override
            public void onCLick(View v) {
                String mUsername = username.getText().toString().trim();
                String mPass = password.getText().toString().trim();

                if (!mUsername.isEmpty() || !mPass.isEmpty()) {
                    Login(mUsername, mPass);
                } else {
                    username.setError("Please insert Username");
                    password.setError("Please insert Password");
                }
            }
        });
    }

    private void Login(String username, final String password){
        btn_sign.setVisibility(View.GONE);

        StringRequest stringRequest = new StringRequest(Request.Method.POST, URL_LOGIN, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try{
                    JSONObject jsonObject = new JSONObject(response);
                    String success = jsonObject.getString("Success");
                    JSONArray jsonArray = jsonObject.getJSONArray("login");

                    if(success.equals("1")){
                        for(int i=0; i<jsonArray.length(); i++){
                            JSONObject object = jsonArray.getJSONObject(i);

                            String nama = object.getString("nama").trim();
                            String  username = object.getString("username").trim();

                            sessionManager.createSession(nama, username);

                            Intent intent = new Intent(LoginActivity.this, HomeActivity.class);
                            intent.putExtra("nama", nama);
                            startActivity(intent);
                        }
                    }
                }catch (JSONException e){
                    e.printStackTrace();
                    btn_sign.setVisibility(View.VISIBLE);
                    Toast.makeText(LoginActivity.this, "Error"+e.toString(), Toast.LENGTH_SHORT).show();
                }

            }
        },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        btn_sign.setVisibility(View.VISIBLE);
                        Toast.makeText(LoginActivity.this, "Error"+error.toString(), Toast.LENGTH_SHORT).show();

                    }
                })
        {
            @Override
            protected Map<String, String> getParams() throws AuthFailureError{
                Map<String, String> params = new HashMap<>();
                params.put("username", username);
                params.put("password", password);
                return params();
            }
        };
        ReferenceQueue referenceQueue = Volley.newRequestQueue(this);
        referenceQueue.add(stringRequest);
    }
}
