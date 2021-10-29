<?php

class PostController extends Controller
{
    public function __construct()
    {
        $this->postM = $this->model('PostModel');

        $this->Session = new Session;
    } 

    public function admin()
    {
        $this->Session->startSession();

        $image = $this->postM->selectI();

        $data = [
            "images" => $image
        ];

        $this->view('UsersView/postImage', $data);
    }

    public function adminVideo()
    {
        $this->Session->startSession();

        $video = $this->postM->getVideo();

        $data = [
            "videos" => $video
        ];

        $this->view('UsersView/postVideo', $data);
    }

    // add image
    public function addImage()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $image = $_FILES['Img']['tmp_name'];
            $data = [
                'url' => $_FILES['Img']['name'],
                'Titre' => $_POST['titre'],
            ];

            $img = $this->uploadPhoto($image);
            
            if ($img === true) {
                $this->postM->addImg($data);
                header('location:' . URLROOT . '/PostController/admin');
            }

            
        }
        else {
            $this->view('UsersView/insertImg');
        }
    }

    // delete image
    public function delete($id)
    {
        $this->postM->deleteImg($id);

        header('location:' . URLROOT . '/PostController/admin');
    }

    // edit image
    public function edit($id)
    {
        $edit = $this->postM->getImageById($id);
        $this->view('UsersView/update', $edit);
    }

    // upload image
    public function uploadPhoto($image)
    {    
        $dir = "C:\\xampp\htdocs\PFR_Blog_Photographe\public\img";
        $name = str_replace(' ','-',strtolower($_FILES["Img"]["name"]));
        $type = $_FILES["Img"]["type"];
        if(move_uploaded_file($image,$dir."/".$name)) {
            return true;    
        }
        else {
            return false;
        } 
    }

    // update image
    public function update() 
    {
        if (isset($_POST['update'])) {
            if (!empty($_FILES['Img']) && !empty($_POST['Titre'])) {
      
                $new_image = $_FILES['Img']['tmp_name'];
                $data = [
                    'id' => $_POST['id'],
                    'old_image' => $_POST['old_image'],
                    'upTitre' => $_POST['Titre'],
                    'url' => $_FILES['Img']['name'],
                ];
                // var_dump($data);
                // die();
                
                $old_image = $data['old_image'];
                $path="C:\\xampp\htdocs\PFR_Blog_Photographe\public\img\\$old_image";
                chown($path, 666);
                //    var_dump($old_image);
                //    die();
                
                if ($this->uploadPhoto($new_image) === true) {
                    $this->postM->updateImg($data);
                    
                    header('location:' . URLROOT . '/PostController/admin');
                }
                else{
                    $this->view('UsersView/update');
                }
            }
        }
    }

// **********************************************

    // add video
    public function addVideo() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $video = $_FILES['new_video']['tmp_name'];
            $data= [
                'titre' => $_POST['titre'],
                'new_video' => $_FILES['new_video']['name'],
            ];
            $vid = $this->uploadVideo($video);
            // var_dump($vid);
            // die();
            if ($vid === true) {
                $this->postM->addVideo($data);
                header('location:' . URLROOT . '/PostController/adminVideo');
            }
            
            if (!empty($_FILES['new_video']) && !empty($_POST['titre'])) {

                $video = $_FILES['new_video']['tmp_name'];

                if ($this->uploadVideo($video) === true) {
                    if ($this->postM->addVideo($data)) {
                        header('Location: ' . URLROOT . '/PostController/adminVideo');
                    }
                    else {
                        die('This is not working');
                    }
                }
            } 
            else {
                $data['error'] = 'Un champ est vide';
                $this->view('admin/add-video', $data);
            }
        }
        else {
            $this->view('UsersView/addVideo');
        }

    }

    // upload vidieo
    public function uploadVideo($video) {
        
        $dir = "C:\\xampp\htdocs\PFR_Blog_Photographe\public\uploads\\";
        $name = str_replace(' ','-',strtolower($_FILES["new_video"]["name"]));
        $position = strpos($name, ".");
        $extension = substr($name, $position + 1);
        if ($extension == "mp4" || $extension == "mkv" || $extension == "ogg" || $extension == "webm") {
            if(move_uploaded_file($video,$dir.$name)){
               return true;    
            }
            else{
              return false;
            }
        }
    }

    public function deleteVideo($id)
    {
        $this->postM->deleteVideo($id);

        header('location:' . URLROOT . '/PostController/adminVideo');
    }
    
}

?>