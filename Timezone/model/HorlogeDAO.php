<?php
/**
 * Description of HorlogeDAO
 *
 * @author clem-62
 */
class HorlogeDAO {
    
    public static function insertionHorlogeDAO(Horloge $hor, User $user)
    {
        $connexion = new mSQL();
        
        return $connexion->Request("INSERT INTO horloge VALUES(null, '".$user->getLogin()."', '".$hor->getLocalisation()."');");
    }
    
    public static function suppressionHorlogeDAO($identifiant)
    {
        $connexion = new mSQL();
        $connexion->Request("DELETE FROM HORLOGE WHERE ID = ".$identifiant.";");
    }
    
}
