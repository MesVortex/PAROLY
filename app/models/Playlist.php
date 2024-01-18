<?php 

class Playlist {

private $db ;
private $idPlaylist;
private $namePlaylist;
private $imgPlaylist;
private $nameSone;

private $style;
private $userId;




public function setIdPlaylist($idPlaylist) {
    $this->idPlaylist = $idPlaylist;
}

public function getIdPlaylist() {
    return $this->idPlaylist;
}

public function setNamePlaylist($namePlaylist) {
    $this->namePlaylist = $namePlaylist;
}

public function getNamePlaylist() {
    return $this->namePlaylist;
}

public function setImgPlaylist($imgPlaylist) {
    $this->imgPlaylist = $imgPlaylist;
}

public function getImgPlaylist() {
    return $this->imgPlaylist;
}

public function setNameSong($nameSong) {
    $this->nameSone = $nameSong;
}

public function getNameSong() {
    return $this->nameSone;
}

public function setStyle($style) {
    $this->style = $style;
}

public function getStyle() {
    return $this->style;
}
public function setUserId($userId) {
    $this->userId = $userId;
}

public function getUserId() {
    return $this->userId;
}
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


    public function AddPlaylist(){

$this->db->query("INSERT INTO `playlist`(`name`, `image`, `user_id`) VALUES (:name,:image,:user_id)");
$this->db->bind(':name',$this->getNamePlaylist());
$this->db->bind(':image', $this->getImgPlaylist());
$this->db->bind(':user_id', $this->getUserId());

if($this->db->execute()){

    return true;
}else{
    return false;
}
    }


    public function getAllPlay(){

        $this->db->query("SELECT p.*, GROUP_CONCAT(s.name SEPARATOR ',') AS style_names
        FROM playlist AS p
        JOIN pivot_play_style AS pv ON p.id = pv.play_id
        JOIN style AS s ON s.id = pv.style_id
        GROUP BY p.id;
        ");
        $result = $this->db->resultSet();

        $PlayArray = array();
        foreach ($result as $row) {
            $play = new Playlist();
            $play->setIdPlaylist($row->id);
            $play->setNamePlaylist($row->name);
            $play->setImgPlaylist($row->image);

            $styles = explode(',', $row->style_names);
            $play->setStyle($styles);

       $PlayArray[] = $play;
        }
        return $PlayArray;
    }

    public function addStyleToPlaylist(){



    }
    public function getPlayStyles(){

    $this->db->query("SELECT  GROUP_CONCAT(s.name SEPARATOR ',') AS style_names
    FROM style AS s
    JOIN pivot_play_style AS pv ON s.id = pv.style_id
    join playlist as p on p.id = pv.play_id
    where p.id = :play_id;
    ");
    }




}







?>