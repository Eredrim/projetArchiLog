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
    private $ville;
    private $format;
    
    function __construct($ville, $format = "H:i")
    {
        $fuseau = DateTimeZone::__construct($ville);
        $this->ville = $ville;
    }
    
    public function getHeure()
    {
        $date = new DateTime(null, $fuseau);
        return $date->format($format);
    }
}
