package com.example.gwaragwarapvtlimited;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import java.util.Locale;

public class MainActivity extends AppCompatActivity {

    private static final String PREF_LANGUAGE = "pref_language";
    private static final String DEFAULT_LANGUAGE = "en";

    private TextView textView1;
    private TextView textView2;
    private Button button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        textView1 = findViewById(R.id.txt1);
        textView2 = findViewById(R.id.txt2);
        button = findViewById(R.id.btn1);

        SharedPreferences preferences = getSharedPreferences("com.example.gwaragwarapvtlimited", Context.MODE_PRIVATE);
        String language = preferences.getString(PREF_LANGUAGE, DEFAULT_LANGUAGE);
        setAppLanguage(language);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                openSecondActivity();
            }
        });
    }
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.menu, menu);
        return true;
    }
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if (id == R.id.action_language_english) {
            setAppLanguage("en");
            return true;
        } else if (id == R.id.action_language_zulu) {
            setAppLanguage("zu");
            return true;
        } else if (id == R.id.action_language_afrikaans) {
            setAppLanguage("af");
            return true;
        }
        return super.onOptionsItemSelected(item);
    }

    private void setAppLanguage(String language) {
        Locale locale = new Locale(language);
        Locale.setDefault(locale);
        getResources().getConfiguration().setLocale(locale);
        getResources().updateConfiguration(getResources().getConfiguration(), getResources().getDisplayMetrics());

        SharedPreferences preferences = getSharedPreferences("com.example.gwaragwarapvtlimited", Context.MODE_PRIVATE);
        SharedPreferences.Editor editor = preferences.edit();
        editor.putString(PREF_LANGUAGE, language);
        editor.apply();

        if (textView1 != null) {
            if (language.equals("en")) {
                textView1.setText(R.string.app_name_english);
            } else if (language.equals("zu")) {
                textView1.setText(R.string.app_name_zulu);
            } else if (language.equals("af")) {
                textView1.setText(R.string.app_name_afrikaans);
            }
        }

        if (textView2 != null) {
            if (language.equals("en")) {
                textView2.setText(R.string.welcome_message_english);
            } else if (language.equals("zu")) {
                textView2.setText(R.string.welcome_message_zulu);
            } else if (language.equals("af")) {
                textView2.setText(R.string.welcome_message_afrikaans);
            }
        }

        if (button != null) {
            if (language.equals("en")) {
                button.setText(R.string.button_text_english);
            } else if (language.equals("zu")) {
                button.setText(R.string.button_text_zulu);
            } else if (language.equals("af")) {
                button.setText(R.string.button_text_afrikaans);
            }
        }
    }

    private void openSecondActivity() {
        startActivity(new Intent(MainActivity.this, SecondActivity.class));
    }
}