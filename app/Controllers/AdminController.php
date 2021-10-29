<?php
class AdminController extends Controller
{
    public function __construct()
    {
        $this->adminM = $this->model('AdminModel');
        $this->Session = new Session;
    }

    public function admin()
    {
        $this->Session->startSession();

        $user = $this->adminM->selectUsers();

        $data = [
            "users" => $user,
        ];
        
        $this->view('UsersView/Admin', $data); 
    }

    public function Login()
    {

        $this->Session->startSession();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ];
            //validation email
            if (empty($data['email'])) {
                echo "please enter your email";
            }

            //validation password
            if (empty($data['password'])) {
                echo "please enter your password";
            }

            //check for email et password
            if ($user =$this->adminM->login($data['email'],$data['password'])) {

                $this->Session->setSession('user_id',$user->id);
        
                header('location:' . URLROOT . '/AdminController/home');
                
            }

        }
        else {
            $this->view('UsersView/Login');
        }
    }

    public function home()
    {
        $this->Session->startSession();

        $image = $this->adminM->selectImg();

        $data = [
            "images" => $image
        ];
        // var_dump($data);
        $this->view('UsersView/home', $data); 

    }

    

    // public function addImage()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         $data = [
    //             'url' => $_FILES['Img']['name'],
    //             'Titre' => $_POST['titre'],
    //         ];

    //         $this->adminM->addImg($data);
    //         header('location:' . URLROOT . '/AdminController/home');
    //     }
    //     else {
    //         $this->view('UsersView/addImage');
    //     }
    // }

    // public function uploadPhoto($image)
    // {    
    //     $dir = URLROOT."C:\\xampp\htdocs\PFL\public\img";
    //     $name = str_replace(' ','-',strtolower($_FILES["Img"]["name"]));
    //     $type = $_FILES["Img"]["type"];
    //     if(move_uploaded_file($image,$dir."/".$name)) {
    //         return true;    
    //     }
    //     else {
    //         return false;
    //     } 
    // }
}


?>