<?php
class Pages extends Controller
{
    private $adminModel;

    public function __construct()
    {

        $this->adminModel = $this->model('Admin');
    }

    public function index()
    {

        $this->view('pages/index');

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
        $this->view('pages/playlist');
    }
}


?>