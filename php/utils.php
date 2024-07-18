<?php
    require_once("connection.php");

    // Check if an email is already registered
    function is_email_registered($email) {
        $users = readUserData();
        if (is_array($users)) {
            foreach ($users as $user) {
                if ($user['email'] == $email) {
                    return true;
                }
            }
        }
        return false;
    }

    // Check if the password is correct for the given email
    function is_password_correct($email, $password) {
        $users = readUserData();
        if (is_array($users)) {
            foreach ($users as $user) {
                if ($user['email'] == $email && password_verify($password, $user['password'])) {
                    return true;
                }
            }
        }
        return false;
    }
?>
