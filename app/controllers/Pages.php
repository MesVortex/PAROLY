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

    public function music($id){
        $data = ['musicID' => $id];
        $this->view('pages/music', $data);
    }

    public function about (){
     
    }
}


?>