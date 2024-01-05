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
}



?>