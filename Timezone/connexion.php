<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($_COOKIE["LogedIn"])){
   echo "<script>document.location.href='login.php'</script>";
}