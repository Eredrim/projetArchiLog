<?php

include 'User.php';
include 'mSQL.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserManager
 *
 * @author clem-62
 */
class UserManager {

    private $sql = null;
    private static $instance = null;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new UserManager();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->sql = new mSQL();
    }

    public function insertUser($login, $password) {
        if ($this->userExists($login)) {
            return false;
        } else {
            if (rtrim($login) == "" or rtrim($password) == "") {
                return false;
            } else {
                $this->sql->Request("insert into utilisateur set('" . $login . "','" . $password . "'");
            }
        }
    }

    public function userExists($utilisateur) {
        if (mysqli_num_rows($this->sql->Request('select * from utilisateur where login = \'' . $utilisateur . '\'')) > 0) {
            return true;
        }
        return false;
    }

    public function verifUser($login, $password) {
        if ($this->userExists($login)) {
            $user = new User($login);
            if ($user->checkPassword($password)) {
                setcookie("LogedIn", $login);
                return true;
            }
            return false;
        }
        return false;
    }

    public function getHorloges() {
        if(isset($_COOKIE["LogedIn"])) {
            $login = $_COOKIE["LogedIn"];
            if ($this->userExists($login)) {
                $user = new User($login);
                return $user->getListeHorloges();
            }
        }
        else
        {
            return array();
        }
    }

}
