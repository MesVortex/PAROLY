<?php 
class AdminController extends Controller{

  
    private $adminModel ;
    private $styleModel ;
    private $playModel;

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->styleModel = $this->model('Style');
        $this->playModel = $this->model('Playlist');
        
    }

    public function dash() {
        $stylesArray = $this->styleModel->GetAllStyles();
        $playArray = $this->playModel->getAllPlay();
    
        $playdata = [];
        foreach ($playArray as $play) {
            $playdata[] = [
                'id' => $play->getIdPlaylist(),
                'name' => $play->getNamePlaylist(),
                'image' => $play->getImgPlaylist(),
                'styles' => $play->getStyle(), 
            ];
        }
    
        $allStyleNames = [];
        foreach ($stylesArray as $style) {
            $allStyleNames[] = $style->getStyleName();
        }
    
        $data = [
            'styleNames' => $allStyleNames,
            'playData' => $playdata,
        ];
    
        $this->view('admin/dashAdmin', $data);
    }
    
    
    
public function loginform (){

    $this->view('/admin/login');

} 
public function styleForm(){

   $this->view('/admin/addstyle');

}
public function PlaylistForm(){
        $data =[];
        
   $this->view('/admin/addPlaylist');

}
public function createUserSession($user)
{
    $_SESSION['user_id'] = $user->id;
    $_SESSION['role'] = $user->role_type;
    $_SESSION['username'] = $user->username;
    $_SESSION['email'] = $user->email;
    $this->dash();
}



public function login()
    {
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

        //Init data
        $data = [
            'name/email' => trim($_POST['name/email']),
            'password' => trim($_POST['password'])
        ];

        if (empty($data['name/email']) || empty($data['password'])) {
            flash("login", "Please fill out all inputs");
            $this->view('/admin/login' , $data);
            exit();
        }

        //Check for user/email
        if ($this->adminModel->FindAdmin($data['name/email'], $data['name/email'])) {
            //User Found
            $loggedInUser = $this->adminModel->login($data['name/email'], $data['password']);
            if ($loggedInUser) {
                //Create session
                $this->createUserSession($loggedInUser);
            } else {
                flash("login", "Password Incorrect");
                $this->view('/admin/login',$data);
            }
        } else {
            flash("login", "No user found");
            $this->view('/admin/login' ,$data);
        }
    }
    }



    public function logout()
    {
        unset($_SESSION['role']);
        unset( $_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        session_destroy();
        $this->view('/Pages/index');
    }



    



}


?>