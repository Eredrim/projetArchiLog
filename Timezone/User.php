<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author clem-62
 */
class User {
    private $login;
    private $password;
    
    public function getLogin()
    {
        return $login;
    }
    
    public function passwordOK($mdp)
    {
        if($mdp == $password) { return true; }
        return false;
    }
}
