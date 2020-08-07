package com.dvase.dvase_camera_0731;

import android.util.Log;

import org.json.JSONObject;

import java.io.File;
import java.io.UnsupportedEncodingException;
import java.net.UnknownHostException;

import okhttp3.MediaType;
import okhttp3.MultipartBody;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.RequestBody;
import okhttp3.Response;

public class JSONParser {

    public static JSONObject uploadImage(String imageUploadUrl, String sourceImageFile) {

        final String TAG = "kyurii";

        Log.d(TAG, "imageUploadUrl : " + imageUploadUrl);
        try {
            File sourceFile = new File(sourceImageFile);
            Log.d(TAG, "File...::::" + sourceFile + " : " + sourceFile.exists());
            final MediaType MEDIA_TYPE_PNG = MediaType.parse("image/*");
            String filename = sourceImageFile.substring(sourceImageFile.lastIndexOf("/")+1);
            Log.d(TAG, "FILENAME : " + filename);
            // OKHTTP3
            RequestBody requestBody = new MultipartBody.Builder()
                    .setType(MultipartBody.FORM)
                    .addFormDataPart("uploaded_file", filename, RequestBody.create(MEDIA_TYPE_PNG, sourceFile))
                    .addFormDataPart("result", "photo_image")
                    .build();

            Log.d(TAG, "requeestBody : " + requestBody);

            Request request = new Request.Builder()
                    .url(imageUploadUrl)
                    .post(requestBody)
                    .build();

            Log.d(TAG, "request : " + request);

            OkHttpClient client = new OkHttpClient();
            Response response = client.newCall(request).execute();
            String res = response.body().string();

            Log.d(TAG, "reponse : " + response);
            Log.d(TAG, "res : " + res);
            Log.e(TAG, "Error: " + res);
            return new JSONObject(res);

        } catch (UnknownHostException | UnsupportedEncodingException e) {
            Log.d("TAG", "Error: " + e.getLocalizedMessage());
        } catch (Exception e) {
            Log.d("TAG", "Other Error: " + e.getLocalizedMessage());
        }
        return null;
    }
}