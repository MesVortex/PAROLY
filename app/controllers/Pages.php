<?php 
class Pages extends Controller {
    private $adminModel;

    public function __construct()
    {
    
        $this->adminModel = $this->model('Admin');
    }

public function index(){
   
$this->view('pages/index');

}

    public function music(){
        $this->view('pages/music');
    }

    public function about (){
     
    }
}


?>