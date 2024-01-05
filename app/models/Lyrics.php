<?php

class Lyrics {
  private $pdo ;

  public function __construct(){
    $this->pdo = Database::getInstance();
  }

  public function addLyrics($userID, $songID, $lyrics){
    $query = "INSERT INTO lyrics(text, song_id, user_id, status) VALUES(:lyrics, :songID, :userID, '0')";
    $this->pdo->query($query);
    $this->pdo->bind(':lyrics', $lyrics);
    $this->pdo->bind(':songID', $songID);
    $this->pdo->bind(':userID', $userID);
    $this->pdo->execute();
  }

  public function showLyrics($songID){
    $query = "SELECT l.*, u.username FROM lyrics as l JOIN user as u ON l.user_id = u.id WHERE l.song_id = :songID";
    $this->pdo->query($query);
    $this->pdo->bind(':songID', $songID);
    $results = $this->pdo->resultSet();
    return $results;
  }

}