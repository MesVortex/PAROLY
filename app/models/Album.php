<?php
class Album
{
    private $db;
    private $name;
    private $user_id;
    private $album_id;

    private $AlbumId;
    private $AlbumName;


    public function setalbumId($id)
    {
        $this->AlbumId = $id;
    }


    public function getAlbumId()
    {
        return $this->AlbumId;
    }


    public function setAlbumName($name)
    {
        $this->AlbumName = $name;
    }


    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function addAlbum($name, $image, $style, $user)
    {
        $this->db->query("INSERT INTO album (name, image,style_id, user_id) VALUES (:name, :image, :style, :user)");
        $this->db->bind(':name', $name);
        $this->db->bind(':image', $image);
        $this->db->bind(':image', $style);
        $this->db->bind(':image', $user);
        $this->db->execute();
    }
    public function GetAllAlbum()
    {
        $this->db->query("SELECT * FROM album");
        $result = $this->db->resultSet();

        $albumArray = array();
        foreach ($result as $row) {
            $album = new Album();
            $album->setalbumId($row->id);
            $album->setalbumName($row->name);
            $album->setalbumId($row->image);
            $album->setalbumName($row->albumId);
            $albumArray[] = $album;
        }

        return $albumArray;
    }
}
