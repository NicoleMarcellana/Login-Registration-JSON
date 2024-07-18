<?php
  require_once("connection.php");

  class user {
    public $id;
    public $name;
    public $email;
    public $birthday;
    public $username;
    
    function __construct($email) {
          $users = readUserData();
          foreach ($users as $user) {
              if ($user['email'] == $email) {
                $this->id = $user['id'];
                $this->name = $user['name'];
                $this->birthday = $user['dob'];
                $this->email = $user ['email'];
                $this->username = $user['username'];
                break;
              }
            
          }
    }
  }   
?>