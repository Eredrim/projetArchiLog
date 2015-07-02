<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HorlogeDAO
 *
 * @author clem-62
 */
class HorlogeDAO {
    
    public static function insertionHorlogeDAO(Horloge $hor, User $user)
    {
        $connexion = new mSQL();
        
        $connexion->Request("INSERT INTO HORLOGE (LOGINUTILISATEUR, FUSEAU) VALUES("
                . $user->getLogin() .", "
                . $hor->fuseau() .");");
    }
    
    public static function suppressionHorlogeDAO($identifiant)
    {
        $connexion = new mSQL();
        $connexion->Request("DELETE FROM HORLOGE WHERE ID = ". $identifiant .");");
    }
    
}
