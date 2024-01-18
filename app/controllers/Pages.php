<?php
class Pages extends Controller
{
    private $adminModel;
    private $styleModel;

    public function __construct()
    {

        $this->adminModel = $this->model('Admin');
        $this->styleModel = $this->model('Style');
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
        $data = $this->styleModel->GetAllStyles();
        $this->view('pages/album',$data);
    }
}


?>