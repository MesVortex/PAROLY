<?php 
class PlaylistController extends Controller {


private $PlayModel;
    public function __construct()
    {
        $this->PlayModel = $this->model('Playlist');

    }


    public function addPlaylist(){

        $this->view('/admin/addPlaylist');
    }
 public function addPlay(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (!isset($_FILES['image']) || empty($_FILES['image']['name'])) {
                    $_SESSION['error_message'] = 'Please upload an image.';
                    
                    header('Location: ' . URLROOT . '/authorController/addWiki');
                    exit;
                }
                $uploadedImagePath = $this->handleImageUpload($_FILES['image']);

                if ($uploadedImagePath !== null) {
                    $name = $_POST['name'];
                    $userId = $_SESSION['user_id'];
                    $uniqueFilename = pathinfo($uploadedImagePath, PATHINFO_BASENAME);
    
             
    
 
                    $this->PlayModel->setNamePlaylist($name);
                    $this->PlayModel->setImgPlaylist($uniqueFilename);
                    $this->PlayModel->setUserId($userId);
            
                    $wikiId = $this->PlayModel->AddPlaylist();
    
                    if ($wikiId !== false) {
                        // Redirect to a proper page after successful upload
                        header('Location: ' . URLROOT . '/AdminController/dash');
                        exit;
                    } else {
                        // Handle database insertion failure
                        $_SESSION['error_message'] = 'Failed to add wiki';
                        header('Location: ' . URLROOT . '/authorController/addWiki');
                        exit;
                    }
                    
                } else {
                }
            

        }
    }
     private function handleImageUpload($file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $targetDirectory = $_SERVER['DOCUMENT_ROOT'] . '/PAROLY/public/img/';
    
            if (!file_exists($targetDirectory) && !is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0755, true);
            }
    
            $uniqueFilename = uniqid() . '_' . $file['name'];
    
            $targetPath = $targetDirectory . $uniqueFilename;
    
            if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                return $targetPath;
            } else {
                error_log('Error moving uploaded file.');
                return null;
            }
        } else {
            error_log('Upload error: ' . $file['error']);
            return null;

        }
    }

    public function addPlaylistClient(){
        if(isset($_POST['addPlaylist'])){

            $name = $_POST['playlistname'];
            $image = $_POST['image'];
            $this->PlayModel->addPlaylistclient($name, $image, 1);
  
}
    }

}



?>