<?php

include 'User.php';

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
    private $listeUtilisateurs = null;
    private $instance = null;
    
    public function getInstance()
    {
        if(!$instance)
        {
            $instance = new UserManager();
        }
        return $instance;
    }
    
    public function __construct()
    {
        $listeUtilisateurs = new ArrayObject(User);
        insertUser("admin", "admin");
    }
    
    public function insertUser($login, $password)
    {
        if(userExists($login)) { return false; }
        else
        {
            if(rtrim($login) == "" or rtrim($password) == "") { return false; }
            if(!$listeUtilisateurs) { $listeUtilisateurs = new ArrayObject(User); }
            $listeUtilisateurs.push_back(new User($login, $password));
        }
    }
    
    public function userExists($utilisateur)
    {
        if($listeUtilisateurs)
        {
            for($i=0; i<count($listeUtilisateurs); $i++)
            {
                if($listeUtilisateurs[$i]->getLogin() == rtrim($utilisateur))
                {
                    return $i;
                }
            }
        }
        return false;
    }
    
    public function verifUser($login, $password)
    {
        if($index = userExists($login))
        {
            if($listeUtilisateurs[$index]->checkPassword($password))
            {
                setcookie("LogedIn", true);
            }
        }
        return false;
    }
}
