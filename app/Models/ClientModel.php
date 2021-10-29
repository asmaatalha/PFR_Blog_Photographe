<?php

class ClientModel
{
    public function __construct()
    {
        $this->db = new Database;        
    }

    public function selectC()
    {
        $this->db->query('SELECT * FROM `client`');

        $row = $this->db->resultSet();

        return $row;
    }

    public function insertClient($data)
    {
        $this->db->query('INSERT INTO `client`(`email`, `phone`, `Description`, `Date`) VALUES (:email, :phone, :description, :date)');

        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':date', $data['date']);

        $this->db->execute();
    }

    public function selectI()
    {
        $this->db->query('SELECT * FROM `image`');

        $row = $this->db->resultSet();

        return $row;
    }

    public function getVideo()
    {
        $this->db->query("SELECT * FROM `video`");

        $row = $this->db->resultSet();

        return $row;
    }

    public function selectImg()
    {
        $this->db->query('SELECT * FROM image');

        $row = $this->db->resultSet();

        return $row;
    }
    
}




?>