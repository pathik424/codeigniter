<?php

namespace App\Controllers;

class FirebaseTest extends BaseController
{
    public function sendData()
    {
        $data = [
            'name' => 'Pathik Patel',
            'email' => 'Pathik@example.com'
        ];

        $jsonData = json_encode($data);

        $firebase_url = 'https://codeigniter-58895-default-rtdb.firebaseio.com/users.json';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $firebase_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'Response from Firebase: ' . $response;
        }

        curl_close($ch);
    }

    // NEW METHOD to fetch and display data
    public function fetchData()
    {
        $firebase_url = 'https://codeigniter-58895-default-rtdb.firebaseio.com/users.json';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $firebase_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = 'Curl error: ' . curl_error($ch);
            curl_close($ch);
            return view('firebase_data', ['error' => $error, 'users' => []]);
        }

        curl_close($ch);

        $data = json_decode($response, true);  // Decode to PHP array

        return view('firebase_data', ['users' => $data, 'error' => null]);
    }
}
