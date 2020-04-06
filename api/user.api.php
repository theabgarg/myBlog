<?php

class user{
    private $token;
    private $username;
    private $name;
    private $email;
    private $password;
    private $isAdmin;

    function setToken($token){
        $token = base64_decode($token);
        $token = hex2bin($token);
        $token = md5($token);
        $this->token = $token;
    }

    function setUsername($username){
        $this->username = $username;
    }

    function setName($name){
        $this->name = $name;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setType($isAdmin){
        $this->isAdmin = $isAdmin;
    }

    function getUsername(){
        return $this->username;
    }

    function getName(){
        return $this->name;
    }

    function getEmail(){
        return $this->email;
    }

    function getType(){
        return $this->isAdmin;
    }

    function encPass($password){
        $password = base64_encode(md5($password));
        $this->password = $password;
    }

    function verifyToken($token) {
        if(isset($this->token)){
            $sql ="SELECT * FROM auth WHERE token = '$token'";
            $result = $GLOBALS['conn']->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['valid'] == 1){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    function verifyUsername($username){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        if ($result = $GLOBALS['conn']->query($sql)){
            if ($result->num_rows > 0) {
                return false;
            }
            else{
                return true;
            }
        }
        else{
            return false;
        }
    }

    function checkEmail($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        if ($result = $GLOBALS['conn']->query($sql)){
            if ($result->num_rows > 0) {
                return false;
            }
            else{
                return true;
            }
        }
        else{
            return false;
        }
    }

    function addUser($token, $username, $name, $mobile, $email, $password, $image){
        $token = $this->deEncToken($token);
        $this->setToken($token);
        $tokenValidity = $this->verifyToken($token);
        if($tokenValidity){
            $this->encPass($password);
            $usernameAvailaibility = $this->verifyUsername($username);
            if ($usernameAvailaibility) {
                if($name != null && $email != null){
                    $sql = "INSERT INTO users (username,name, mobile, email, password, profile_pic) VALUES('
                    $username', '$name', '$mobile', '$email', '$this->password', '$image');";
                    $sql .= "UPDATE auth SET valid=0 WHERE token = '$token'";

                    if($GLOBALS['conn']->multi_query($sql)){
                        return "user added successfully";
                    }
                    else{
                        return "Error Occured while registering! : ". $GLOBALS['conn']->error;
                    }
                }
                else{
                    return "name or email not entered!";
                }
            }
            else{
                return "username already exists";
            }
        }
        else{
            return "token is not valid!";
        }

    }

    function deleteUser($username){
        $sql = "SELECT * FROM userDB WHERE username = '$username'";
        if($GLOBALS['conn']->query($sql)){
            $sql = "DELETE FROM userDB WHERE username = '$username'";
            if ($GLOBALS['conn']->query($sql)){
                return "user deleted successfully";
            }
            else{
                return "Error Occured while deleting the User! : " . $GLOBALS['conn']->error;
            }
        }
        else{
            return "This user doesn't exists!";
        }
    }

    function verifyUser($username, $password){
        $this->encPass($password);
        $password = $this->password;
        $sql = "SELECT * FROM users WHERE (username='$username' OR email = '$username') AND pass='$password'";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $row = $result->fetch_assoc();
            $this->setUsername($row['username']);
            $this->setName($row['name']);
            $this->setEmail($row['email']);
            $this->setType($row['role']);
            return true;
        }
        else{
            return false;
        }
    }

    function authToken(){
        $binaryToken = random_bytes(32);
        $actualToken = md5($binaryToken);
        $sql = "INSERT INTO auth (token, valid) VALUES('$actualToken', '1')";
        $GLOBALS['conn']->query($sql);
        $hexToken = base64_encode(bin2hex($binaryToken));
        return $hexToken;
    }

    function deEncToken($token){
        $token = base64_decode($token);
        $token = hex2bin($token);
        $token = md5($token);
        return $token;
    }

    function editUsername($username, $newUsername){
        $sql = "SELECT * FROM userDB WHERE username = '$username'";
        if($result = $GLOBALS['conn']->query($sql)){
            if($result->num_rows > 0){
                $sql = "UPDATE userDB SET username='$newUsername' WHERE username = '$username'";
                if($GLOBALS['conn']->query($sql)){
                    return "username changed successfully!";
                }
                else{
                    return "Error Occured!".$GLOBALS['conn']->error;
                }
            }
            else{
                return "No user with this username found";
            }
        }
        else{
            return "Error Occured! ".$GLOBALS['conn']->error;
        }
    }
}

?>