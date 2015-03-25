<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * $fuseau entier de -12 à +12
 */
function get_heure($fuseau)
{
    if($fuseau<=12 && $fuseau >= -12){
        date('dd/mm/YYYY hh:mi:ss', time());
    }
    else
    {
        return -13; //Le fuseau en paramètre n'est pas correct.
    }
}