<?php
class Pages extends Controller
{
    private $adminModel;
    private $lyricsModel;
    private $playlistModel ;


    public function __construct()
    {

        $this->adminModel = $this->model('Admin');
        $this->lyricsModel = $this->model('Lyrics');
        $this->playlistModel = $this->model('Playlist');
    }

    public function index()
    {

        $this->view('pages/index');

}

    public function music($songID){
        $lyrics =  $this->lyricsModel->showLyrics($songID);
        $playlists = $this->playlistModel->showPlaylists(1);
        $data = [
            'musicID' => $songID,
            'lyrics' => $lyrics,
            'playlists' => $playlists
        ];
        $this->view('pages/music', $data);
    }

    public function about()
    {

    }
    public function signup()
    {
        $this->view('Pages/signup');

    }
    public function login()
    {
        $this->view('Pages/login');

    }
    public function newPassword()
    {
        $this->view('Pages/create-new-password');
    }
    public function verify()
    {
        $this->view('Pages/verify');
    }

    public function artiste()
    {
        $this->view('pages/artistev');
    }
    public function reset_password()
    {
        $this->view('pages/reset-password');
    }

    public function song(){
        $this->view('pages/song');
    }

    public function album(){
        $this->view('pages/album');
    }
    public function playlist(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $userPlaylist =  $this->playlistModel->showPlaylistClient($_POST['id_user']);
           $data = [
            'userPlaylist' => $userPlaylist
            ];
    
           $this->view('pages/playlist', $data);
        }else{
            echo 'I didnt make it';
        }
    }
}


?>