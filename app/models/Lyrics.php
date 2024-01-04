<?php

class Lyrics {
  private $id;
  private $text;
  private $songID;
  private $userID;
  private $status;
  private $db ;

  public function __construct(){
    $this->db = Database::getInstance()->getConnection(); 
  }

  public function addLyrics($userID, $songID, $lyrics){
    $query = "INSERT INTO lyrics(text, song_id, user_id, status, likes) VALUES(:lyrics, :songID, :userID, 'not verified', '0')";
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':lyrics', $lyrics);
    $stmt->bindParam(':songID', $songID);
    $stmt->bindParam(':userID', $userID);
    $stmt->execute();
  }
}