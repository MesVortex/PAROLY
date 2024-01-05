<?php

class ArtisteController extends Controller {

    private $artisteModel;
    private $songModel;
    private $albumModel;

    public function __construct() {
        $this->songModel = $this->model('Song');
        $this->albumModel = $this->model('Album');
        
    }

    public function addSong() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['song_name'];
            $image = $_FILES['song_image']['name'];
            $img_size = $_FILES['song_image']['size'];
            $tmp_name = $_FILES['song_image']['tmp_name'];
            $error = $_FILES['song_image']['error'];


            if ($error === 0) {

                $img_ex = pathinfo($image, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
        
        
                $new_image = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_image;
                move_uploaded_file($tmp_name, $img_upload_path);
            }
            $this->songModel->addSong($name,$new_image);
            
        }
    }

    public function addAlbum() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['album_name'];
            $image = $_FILES['album_image']['name'];
            $img_size = $_FILES['album_image']['size'];
            $tmp_name = $_FILES['album_image']['tmp_name'];
            $error = $_FILES['album_image']['error'];
            $this->albumModel->addAlbum($name, $image);


            if ($error === 0) {

                $img_ex = pathinfo($image, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
        
        
                $new_image = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_image;
                move_uploaded_file($tmp_name, $img_upload_path);
            }
            $this->songModel->addSong($name, $ $new_image);
        }
    }

}
?>


