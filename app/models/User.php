<?php
require __DIR__ . "/../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


function generate_code()
{
    return bin2hex(openssl_random_pseudo_bytes(15));
}

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
        $this->db->query('SELECT * FROM users WHERE username= :username OR email = :email');
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
        $verification_code = generate_code();

        $this->db->query('INSERT INTO users (username, email,  password, role_type,verification_code) 
        VALUES (:name, :email, :password, :role_type, :verification_code)');
        //Bind values
        $this->db->bind(':name', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role_type', $data['role_type']);
        $this->db->bind(':verification_code', $verification_code);


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
    public function resetPassword($email, $newpass)
    {
        $this->db->query('UPDATE users SET password=:pwd where email:email');
        $this->db->bind(':pwd', $newpass);
        $this->db->bind(':email', $email);


        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function get_songs($artist)
    {
        $query = 'SELECT song.*, album.name AS album_name, users.username
                  FROM song
                  JOIN album ON song.album_id = album.id
                  JOIN users ON album.user_id = users.id
                  WHERE users.role_type = 1
                  AND users.username = :artist';

        $this->db->query($query);
        $this->db->bind(':artist', $artist);

        return $this->db->resultSet();
    }

    public function searchArtist($artistUsername)
    {
        $query = 'SELECT song.*, album.name as album_name, users.username
                  FROM song, album, users
                  WHERE song.album_id = album.id
                  AND album.user_id = users.id
                  AND users.role_type = 1
                  AND users.username LIKE :artistUsername';

        $this->db->query($query);
        $this->db->bind(':artistUsername', '%' . $artistUsername . '%');

    }
    function forgot_password($email, $verification_code)
    {
        $link = "<a href='http://localhost:8082/Controllers/Verify'>here</a>";
        $mail = new PHPMailer(true);

        try {
            $mail = new PHPMailer(true);

            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->Username = 'haritiasmae74@gmail.com';                     //SMTP username
            $mail->Password = 'jykpgcstpwkqmqm';

            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('thedigitalnj@gmail.com', 'CodingShodingWithNJ');
            $mail->addAddress($email, "hariti asmae");

            //Content
            //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body = "Thanks for Registering with us. To activate your account click $link";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            try {

                $mail->send();
                echo "Email sent successfully";
            } catch (Exception $e) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo json_encode(['status' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    }



}