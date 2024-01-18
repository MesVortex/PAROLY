<?php 
require_once('User.php');
class Admin extends User {
private $db; 

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function FindAdmin($email, $username)
    {
        $this->db->query('SELECT * FROM user WHERE username= :username OR email = :email AND role_type = 2 ');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
   //Login user

   
   public function login($nameOrEmail, $password)
   {

       $row = $this->FindAdmin($nameOrEmail, $password);


       if ($row == null){
        return null;
       }
           

       $hashedPassword = $row->password;
       if (password_verify($password, $hashedPassword)) {
            
            
           return $row;
       } else {
           return null;
       }
   }


public function AddStyle($data){


}
 



}

?>