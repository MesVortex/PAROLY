<?php

class LyricsCont extends Controller{
  private $lyricsModel;

  public function __construct(){
    $this->lyricsModel = $this->model('Lyrics');
  }

  public function addLyrics(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $userID = intval($_POST['userID']);
      $songID = intval($_POST['songID']);
      $lyrics = $_POST['lyrics'];
      $this->lyricsModel->addLyrics($userID, $songID, $lyrics);
      header('Location:'.URLROOT.'/pages/music/'.$songID);
    }
  }

}