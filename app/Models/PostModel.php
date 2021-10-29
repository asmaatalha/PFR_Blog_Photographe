<?php

class PostModel
{
    public function __construct()
    {
        $this->db = new Database;        
    }

    // select Image admin
    public function selectI()
    {
        $this->db->query('SELECT * FROM `image`');

        $row = $this->db->resultSet();

        return $row;
    }

    // add image
    public function addImg($addImage)
    {
        $this->db->query('INSERT INTO `image` (`url_imge`, `titre`) VALUES(:img, :titre)');

        $this->db->bind(':img', $addImage['url']);
        $this->db->bind(':titre', $addImage['Titre']);

        $this->db->execute();
    }

    // delete image
    public function deleteImg($id)
    {
        $this->db->query('DELETE FROM image WHERE id = :id');
        
        $this->db->bind('id', $id);

        $result = $this->db->single();

        return $result;
    }


    public function getImageById($id)
    {
        $this->db->query('SELECT * FROM image WHERE id = :id');
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    // update image
    public function updateImg($upd)
    {
        $this->db->query('UPDATE `image` SET titre = :Titre, url_imge = :img WHERE id = :id');

        $this->db->bind(':Titre', $upd['upTitre']);
        $this->db->bind(':img', $upd['url']);
        $this->db->bind(':id', $upd['id']);

        $this->db->execute();
    }

    // add vedieo
    public function addVideo($data)
    {
        $this->db->query("INSERT INTO `video`(`url_video`, `titre`) VALUES (:new_video, :titre)");
        
        $this->db->bind(':new_video', $data['new_video']);
        $this->db->bind(':titre', $data['titre']);

        $this->db->execute();
    }

    // select video admin
    public function getVideo()
    {
        $this->db->query("SELECT * FROM `video`");

        $row = $this->db->resultSet();

        return $row;
    }

    // delete video
    public function deleteVideo($id) {
        $this->db->query("DELETE FROM `video` WHERE id = :id");
        $this->db->bind(':id', $id);

        $result = $this->db->single();

        return $result;
    }

    
}


?>