<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Horloge
 *
 * @author clem-62
 */
class Horloge {
    private $fuseau;
    private $localisation;
    private $format;
    
    function __construct($localisation, $format = "H:i")
    {
        $this->fuseau = new DateTimeZone($localisation);
        $this->localisation = $localisation;
        $this->format = $format;
    }
    
    public function getHeure()
    {
        $date = new DateTime(null, $this->fuseau);
        return $date->format($this->format);
    }
    
    public function getVille()
    {
        $customVille = explode('/', $this->localisation)[1];
        return str_replace('_', ' ', $customVille);
    }
}
?>