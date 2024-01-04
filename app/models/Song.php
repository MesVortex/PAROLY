<?php
class Song
{
    private $db;
    private $name;
    private $image;
    private $album_id;

    public function __construct(Database $db)
    {
        $this->db = Database::getInstance();
    }

    public function addAlbum($name, $image)
    {
         $this->db->query("INSERT INTO song (name, image) VALUES (:name, :image)");

        $this->db->bind(':name', $name);
        $this->db->bind(':image', $image);

        $this->db->execute();
    }
}
?>