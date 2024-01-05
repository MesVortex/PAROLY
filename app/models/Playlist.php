<?php

class Playlist{
  private $pdo ;

  public function __construct(){
    $this->pdo = Database::getInstance();
  }

  public function showPlaylists($userID){
    $query = "SELECT name FROM playlist WHERE user_id = :userID";
    $this->pdo->query($query);
    $this->pdo->bind(':userID', $userID);
    $playlists = $this->pdo->resultSet();
    return $playlists;
  }
}