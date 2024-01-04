<?php
class Pages extends Controller
{
    private $adminModel;
    private $lyricsModel;

    public function __construct()
    {

        $this->adminModel = $this->model('Admin');
        $this->lyricsModel = $this->model('Lyrics');
    }

    public function index()
    {

        $this->view('pages/index');

}

    public function music($songID){
        $lyrics =  $this->lyricsModel->showLyrics($songID);
        $data = [
            'musicID' => $songID,
            'lyrics' => $lyrics
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

    public function artiste()
    {
        $this->view('pages/artistev');
    }
    public function reset_password()
    {
        $this->view('pages/reset-password');
    }
}


?>