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
    private $formatDate = "d/m/Y";
    
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
    
    public function getDate()
    {
        $date = new DateTime(null, $this->fuseau);
        return $date->format($this->formatDate);
    }
    
    public function getVille()
    {
        $customVille = explode('/', $this->localisation)[1];
        return str_replace('_', ' ', $customVille);
    }
    
    public function getAngleAigHeure()
    {
        $angleH = intval(explode(":",$this->getHeure())[0])%12/12*360+intval(explode(":",$this->getHeure())[1])/60*30;
        return $angleH;
    }
    
    public function getAngleAigMin()
    {
        $angleM = $angleM = intval(explode(":",$this->getHeure())[1])/60*360;
        return $angleM;
    }
    
    public function getCouleur()
    {
        $date = new DateTime(null, $this->fuseau);
        $sunInfos = date_sun_info($date
                , $fuseau->getLocation()['latitude']
                , $fuseau->getLocation()['longitude']);
        
        if($date >= $sunInfos['civil_twilight_begin'] && $date <= $sunInfos['sunrise'])
        { return "#dd7632"; }
        if($date <= $sunInfos['civil_twilight_end'] && $date >= $sunInfos['sunset'])
        { return "#e7a235"; }
        if($date <= $sunInfos['civil_twilight_begin'] && $date >= $sunInfos['civil_twilight_end'])
        { return "#5b52aa"; }
        if($date >= $sunInfos['sunrise'] && $date <= $sunInfos['sunset'])
        { return "#eeb934"; }
    }
}
?>