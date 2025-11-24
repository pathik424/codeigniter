<?php 
namespace App\Controllers;

use Kreait\Firebase\Factory;

class FirebaseController extends BaseController
{
    protected $database;

    public function __construct()
    {
        $serviceAccount = APPPATH . 'Config/firebase_credentials.json';

        $factory = (new Factory)
            ->withServiceAccount($serviceAccount);

        $this->database = $factory->createDatabase();
    }

    public function saveData()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ];

        $newData = $this->database
            ->getReference('users')
            ->push($data);

        return $this->response->setJSON([
            'message' => 'Data saved!',
            'key' => $newData->getKey()
        ]);
    }
}
