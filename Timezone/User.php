<?php

include("Horloge.php");
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
    private $listeHorloges;

    public function __construct($login) {
        $this->listeHorloges = array();
        $sqlHelper = new mSQL();
        $data = mysqli_fetch_assoc($sqlHelper->Request('SELECT password FROM utilisateur'));
        $this->login = $login;
        $this->password = $data['password'];
        
        $req2 = $sqlHelper->Request('SELECT fuseau FROM horloge where loginUtilisateur = \''.$login.'\'');
        while($data2 = mysqli_fetch_assoc($req2)){
            array_push($this->listeHorloges, new Horloge($data2['fuseau']));
        }
    }

    public function getLogin() {
        return $this->login;
    }

    public function checkPassword($mdp) {
        if (md5($mdp) == $this->password) {
            return true;
        }
        return false;
    }

    public function getListeHorloges() {
        return $this->listeHorloges;
    }

}
