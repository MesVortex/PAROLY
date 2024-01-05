<?php 
class StyleController extends Controller{

    // private $adminModel ;
    private $styleModel ;

    public function __construct()
    {
        // $this->adminModel = $this->model('Admin');
        $this->styleModel = $this->model('Style');
        
    }



    public function dash() {
        $stylesArray = $this->styleModel->GetAllStyles();
    
       
        $styleNames = [];
        foreach ($stylesArray as $style) {
            $styleNames[] = $style->getStyleName();
        }
    
   
        $data = ['styleNames' => $styleNames];
    
        // Pass data to the view
        $this->view('admin/dashAdmin', $data);
    }


    public function addStyle(){

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'])){
    

      
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $data = [
                'name' => trim($_POST['name'])
            ];
    

            if (!empty($data['name'])) {
                 $this->styleModel->addStyle($data);
                 redirect(URLROOT.'/AdminController/dash');
           

            }else{
                 //// validation input 
            if(strlen($data['name'] < 3 )){
                flash("addStyle", "this name is too small");
                $this->styleForm();
            }
            if (
                empty($data['name'])
               
            ) {
                flash("addStyle", "Please fill out input");
                $this->styleForm();
            }
           
        
            }
        
    

       
 
       }

   

    }

    
    public function styleForm(){

        $this->view('/admin/addstyle');
     
     }

}


?>