package com.example.gwaragwarapvtlimited;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.TextView;

import java.util.Locale;

public class SecondActivity extends AppCompatActivity {

    private static final String PREF_LANGUAGE = "pref_language";
    private static final String DEFAULT_LANGUAGE = "en";

    private TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);

        textView = findViewById(R.id.txt2);

        SharedPreferences preferences = getSharedPreferences("com.example.gwaragwarapvtlimited", Context.MODE_PRIVATE);
        String language = preferences.getString(PREF_LANGUAGE, DEFAULT_LANGUAGE);
        setAppLanguage(language);
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

        if (textView != null) {
            if (language.equals("en")) {
                textView.setText(R.string.welcome_message_english);
            } else if (language.equals("zu")) {
                textView.setText(R.string.welcome_message_zulu);
            } else if (language.equals("af")) {
                textView.setText(R.string.welcome_message_afrikaans);
            }
        }
    }
}
