<?php

class AdminModel
{
    public function __construct()
    {
        $this->db = new Database;
        
    }

    public function Login($email, $password)
    {
        $this->db->query('SELECT * FROM admin WHERE email = :email AND password = :password');
        
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        
        $row = $this->db->single();

        if($row = $this->db->single()){
            return $row;
        } 
        else {
            return false; 
        }

    }

    public function findUser($email)
    {
        $this->db->query('SELECT * FROM admin WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    public function selectImg()
    {
        $this->db->query('SELECT * FROM image');

        $row = $this->db->resultSet();

        return $row;
    }

    // public function addImg($addImage)
    // {
    //     $this->db->query('INSERT INTO `image` (`url_imge`, `titre`) VALUES(:img, :titre)');

    //     $this->db->bind(':img', $addImage['url']);
    //     $this->db->bind(':titre', $addImage['Titre']);

    //     $this->db->execute();
    // }
}



?>