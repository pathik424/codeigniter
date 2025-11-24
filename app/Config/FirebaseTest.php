<?php

namespace App\Controllers;

class FirebaseTest extends BaseController
{
    public function sendData()
    {
        $data = [
            'name' => 'Test User',
            'email' => 'test@example.com'
        ];

        $jsonData = json_encode($data);

        // ✅ Your Firebase Database URL
        $firebase_url = 'https://codeigniter-58895.firebaseio.com/users.json';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $firebase_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($ch);
        curl_close($ch);

        echo $response;
    }
}
