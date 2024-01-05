<?php
class Song
{
    private $db;
    private $name;
    private $image;
    private $album_id;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function addSong($name, $new_img_name)
    {
        $this->db->query("INSERT INTO song(name, image) VALUES (:name, :image)");
        $this->db->bind(':name', $name);
        $this->db->bind(':image', $new_img_name);
        $this->db->execute();
    }
}
?>