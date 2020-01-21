<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $db = new Database();
        $this->db = $db->getDB();

        $this->mailClient = new Sendmail();
        $this->subject = "Welcome to Fitness X Zone";
    }

    public function getUser()
    {
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);

        $sql = "SELECT * FROM `users` WHERE `username` = :username AND `pass` = :pass";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([':username' => $username, ':pass' => $pass ]);

        $result = false;
        try {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!empty($result['username'])) {
                $_SESSION['user'] = $result['username'];
                $_SESSION['error'] = '';

                $result = true;
            }
            
        } catch(Exception $e) {
            $result = false;
            $_SESSION['error'] = $e->getMessage();
        }

        return $result;
    }

    public function save()
    {
        if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pass'])) { {
                return false;
            }
        }

        $username = $_POST['username'];
        $pass = md5($_POST['pass']);

        if (!$email = $this->validMail($_POST['email'])) {
            $_SESSION['error'] = "Invalid email";
            return false;
        } else {
            unset($_SESSION['error']);
        }

        $sql = "INSERT INTO `users` (`username`, `email`,`pass`) VALUES (:username, :email, :pass)";
        $stmt = $this->db->prepare($sql);
        $res =  $stmt->execute([':username' => $username, ':email' => $email, ':pass' => $pass]);

        if ($res) {
            // send validation mail
            $hash = $this->cryptDecriptString($email);
            $email_hash_param = $this->cryptDecriptString(rand(0, 100));
            $hash = $hash . '&r=' . $email_hash_param;
            $validateURL = 'http://localhost/activate.php?a=' . $hash;

            $body = "
                <div>
                    You can activate your registration <a href='{$validateURL}'>here</a> 
                </div>";
            $this->mailClient->send($email, $username, $this->subject, $body);

            // $sql = "INSERT INTO `mail_activation` (`email`, `hash`) VALUES (:email, :hash)";
            // $stmt = $this->db->prepare($sql);
            // $res =  $stmt->execute([':email' => $email, ':hash' => $email_hash_param]);
        }

        // lenght - 8 letters and digits
        // preg_match_all("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $pass, $out);

        // if(!$out[0][0]) {
        //     $_SESSION['error'] = "Invalid password";
        //     return false;
        // }
        // $_SESSION['error'] = '';

        // $pass = hash('sha256', $out[0][0]);

    }

    private function validMail($mail)
    {
        return filter_var($mail, FILTER_VALIDATE_EMAIL);
    }

    // public function activateUser($email,$hash)
    // {
    //     $sql = "UPDATE `users` SET
                    
    //                 `active` = 1
    //             WHERE
    //                 `email` = :email";

    //     $stmt = $this->db->prepare($sql);

    //     try {
    //         $result = $stmt->execute([

                
    //             ':active' => 1,
    //             ':email' => $email
    //         ]);

    //         // $this->activateMail($email, $hash);

    //         return $result;
    //     } catch (Exception $e) {
    //         print_r($e->getMessage());
    //         die();
    //     }
    // }

    // private function activateMail($email, $hash)
    // {
    //     $mail_activation_sql = "UPDATE `mail_activation` SET
    //                 `activated` = 1
    //             WHERE
    //                 `email` = :email
    //             AND `hash` = :hash";

    //     $mail_stmt = $this->db->prepare($mail_activation_sql);

    //     try {
    //         return $mail_stmt->execute([
    //             ':email' => $email,
    //             ':hash' => $hash
    //         ]);
    //     } catch (Exception $e) {
    //         print_r($e->getMessage());
    //         die();
    //     }
    // }

    public function cryptDecriptString($string, $action = 'e')
    {
        $secret_key = 'my_simple_secret_key';
        $secret_iv = 'my_simple_secret_iv';

        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'e') {
            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
        } else if ($action == 'd') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }



    // public function isActivated($email, $hash)
    // {
    //     $sql = "SELECT `activated`
    //             FROM `mail_activation`
    //             WHERE `email` = :email
    //             AND `hash` = :hash";

    //     $stmt = $this->db->prepare($sql);
    //     $stmt->execute([':email' => $email, ':hash' => $hash]);
    //     $result = $stmt->fetchColumn();

    //     return $result;
    // }
}
