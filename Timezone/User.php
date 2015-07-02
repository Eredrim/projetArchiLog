<?php

include("Horloge.php");
include("HorlogeDAO.php");

/**
 * @author clem-62
 */
class User {

    private $login;
    private $password;
    private $listeHorloges;

    public function __construct($login) {
        $this->listeHorloges = array();
        $sqlHelper = new mSQL();
        $data = mysqli_fetch_assoc($sqlHelper->Request("SELECT password FROM utilisateur WHERE login = '". $login . "'"));
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
    
    public function addToListeHorloge(Horloge $hor)
    {
        array_push($listeHorloge, $hor);
        //Insertion en base
        HorlogeDAO::insertionHorlogeDAO($hor, $this);
    }
    
    public function deleteFromListeHorloge(Horloge $hor)
    {
        array_push($listeHorloge, $hor);
        //Suppresion de la base (enfin de l'objet dans la base, pas suppression de la base elle-même)
        HorlogeDAO::suppressionHorlogeDAOHorlogeDAO($hor);
    }
}
