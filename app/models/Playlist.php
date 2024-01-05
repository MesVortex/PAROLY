<?php 

class Playlist {

private $db ;
private $idPlaylist;
private $namePlaylist;
private $imgPlaylist;
private $nameSone;

    public function __construct(){

     $this->db = Database::getInstance();
    }

    public function showPlaylists($userID){
        $query = "SELECT name FROM playlist WHERE user_id = :userID";
        $this->db->query($query);
        $this->db->bind(':userID', $userID);
        $playlists = $this->db->resultSet();
        return $playlists;
    }


}







?>