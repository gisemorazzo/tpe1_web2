<?php
    session_start();
class AuthHelpers{
    function __construct() {
    }

    function getEmail(){
        if (isset($_SESSION['email'])) {
            $user = $_SESSION['email'];
            return $user;
        }
    }
}