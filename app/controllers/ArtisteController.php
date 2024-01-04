<?php


class ArtisteController extends Controller{

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once '../models/artiste.php';

    if ($_POST['action'] == 'addSong') {
        $name = $_POST['song_name'];
        $image = $_POST['song_image'];
            
        $song = new Song();
        $song->addSong($name, $image);
    } elseif ($_POST['action'] == 'addAlbum') {
        $name = $_POST['album_name'];
        $image = $_POST['album_image'];

        $album = new Album();
        $album->addAlbum($name, $image);
    }

    // header('Location: artistev.php');
    // exit;
}
?>