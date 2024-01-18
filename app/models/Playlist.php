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

    public function showPlaylists($userID){
        $query = "SELECT name FROM playlist WHERE user_id = :userID";
        $this->db->query($query);
        $this->db->bind(':userID', $userID);
        $playlists = $this->db->resultSet();
        return $playlists;
    }    
    public function addPlaylistClient($namePlaylist, $imgPlaylist, $idUsr){
        $this->db->query("INSERT INTO playlist (name, image, user_id) VALUES (:namePlaylist, :imgPlaylist, :idUsr)");
        $this->db->bind(':namePlaylist', $namePlaylist);
        $this->db->bind(':imgPlaylist', $imgPlaylist);
        $this->db->bind(':idUsr', $idUsr);
        $this->db->execute();
        
    }

        public function showPlaylistClient($idUsr){
            $this->db->query("SELECT playlist.name as playlistName, s.name as songName, a.name as albumName, u.username FROM playlist
            JOIN pivot_play_song AS pivot ON playlist.id = pivot.id_playlist 
            JOIN song AS s ON pivot.id_song = s.id
            JOIN album as a ON a.id = s.album_id 
            JOIN user as u ON u.id = a.user_id
            WHERE playlist.user_id = :idUsr ");
            $this->db->bind(':idUsr', $idUsr);
            $this->db->execute();

            $result = $this->db->resultSet();
            
            return $result;
        }    


}







?>