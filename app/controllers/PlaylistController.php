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

    public function addPlaylistClient(){
        if(isset($_POST['addPlaylist'])){

            $name = $_POST['playlistname'];
            $image = $_POST['image'];
            $this->PlayModel->addPlaylistclient($name, $image, 1);
        }
    }
}



?>