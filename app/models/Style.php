<?php 

class Style {
    private $db ;

    private $StyleId ; 
    private $StyleName;


     public function setStyleId($id) {
        $this->StyleId = $id;
    }


    public function getStyleId() {
        return $this->StyleId;
    }


    public function setStyleName($name) {
        $this->StyleName = $name;
    }

 
    public function getStyleName() {
        return $this->StyleName;
    }

public function __construct (){

$this->db = Database::getInstance();

}


public function GetAllStyles() {
    $this->db->query("SELECT * FROM style");
    $result = $this->db->resultSet();

    $stylesArray = array();

    foreach ($result as $style) {
        // Create an associative array for each style
        $styleArray = array(
            'id' => $style->id,
            'name' => $style->name
        );

        $stylesArray[] = $styleArray;
    }

    return $stylesArray;
}


public function addStyle($data){

    $this->db->query("INSERT INTO `style` (`name`) VALUES (:name)");
    $this->db->bind(':name',$data['name']);
 if ( $this->db->execute()) {
    return true;
 }else{
    return false;
 }

}











}






?>