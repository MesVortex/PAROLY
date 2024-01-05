<?php 

class Playlist {

private $db ;
private $idPlaylist;
private $namePlaylist;
private $imgPlaylist;
private $nameSone;
private $idUsr;

    public function __construct(){

     $this->db = Database::getInstance();
    }

    public function addPlaylistClient($namePlaylist, $imgPlaylist, $idUsr){
        $this->db->query("INSERT INTO playlist (name, image, user_id) VALUES (:namePlaylist, :imgPlaylist, :idUsr)");
        $this->db->bind(':namePlaylist', $namePlaylist);
        $this->db->bind(':imgPlaylist', $imgPlaylist);
        $this->db->bind(':idUsr', $idUsr);
        $this->db->execute();
        
    }

    public function showPlaylistClient($idUsr){
        $this->db->query("SELECT * FROM playlist WHERE user_id = :idUsr");
        $this->db->bind(':idUsr', $idUsr);
        $this->db->execute();
    }    


}







?>