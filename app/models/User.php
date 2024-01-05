<?php


class User
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $username)
    {
        $this->db->query('SELECT * FROM user WHERE username= :username OR email = :email');
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

    public function register($data)
    {

        $this->db->query('INSERT INTO user (username, email,  password, role_type) 
        VALUES (:name, :email, :password, :role_type)');
        //Bind values
        $this->db->bind(':name', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role_type', $data['role_type']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password)
    {
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if ($row == false)
            return false;

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }
    public function resetPassword($newPwdHash, $tokenEmail)
    {
        $this->db->query('UPDATE user SET password=:pwd WHERE email=:email');
        $this->db->bind(':pwd', $newPwdHash);
        $this->db->bind(':email', $tokenEmail);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}