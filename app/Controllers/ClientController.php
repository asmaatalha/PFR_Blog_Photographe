<?php

class ClientController extends Controller
{
    public function __construct()
    {
        $this->clientM = $this->model('ClientModel');

        $this->Session = new Session;
    }

    public function client()
    {
        $this->Session->startSession();

        $client = $this->clientM->selectC();

        $data = [
            "clients" => $client
        ];

        $this->view('UsersView/dashboard', $data);
    }

    public function addClient()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'description' => $_POST['description'],
                'date' => $_POST['date'],
            ];

            $this->clientM->insertClient($data);
            header('location:' . URLROOT . '/AdminController/home');
        }
        else {
            $this->view('UsersView/home');
        }
    }

    public function imagClient()
    {
        $this->Session->startSession();

        $image = $this->clientM->selectI();

        $data = [
            "images" => $image
        ];

        $this->view('UsersView/imagClient', $data);
    }

    public function videoClient()
    {
        $this->Session->startSession();

        $video = $this->clientM->getVideo();

        $data = [
            "videos" => $video
        ];

        $this->view('UsersView/videoClient', $data);
    }

    public function home()
    {
        $this->Session->startSession();

        $image = $this->clientM->selectImg();

        $data = [
            "images" => $image
        ];
        // var_dump($data);
        $this->view('UsersView/homeClient', $data); 

    }


}





?>