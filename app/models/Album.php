<?php 
class Album 
{
    private $db;
    private $name;
    private $user_id;	
    private $style_id;	


    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function addAlbum($name, $image)
    {
        $this->db->query("INSERT INTO album (name, image) VALUES (:name, :image)");
        $this->db->bind(':name', $name);
        $this->db->bind(':image', $image);
        $this->db->execute();
    }

    
}

?>