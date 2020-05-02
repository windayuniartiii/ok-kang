package com.anggara.oktkang;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.TextView;

import java.util.HashMap;

class HomeActivity extends AppCompatActivity{

    private TextView namauser;
    SessionManager sessionManager;

    @Override
    protected void onCreate(Bundle savedInstanceState){
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        sessionManager = new SessionManager(this);
        sessionManager.checkLogin();

        namauser = findViewById(R.id.namauser);

        HashMap<String, String> user = sessionManager.getUserDetail();
        String mNamauser = user.get(sessionManager.NAMA);

        namauser.setText(mNamauser);
    }
}
