<?php

/**
 * Description of mSQL
 *
 * @author Gilles
 */
class mSQL {
    const DB_ADDR = 'localhost';
    const DB_USR = 'root';
    const DB_PASS = '12345';
    const DB_NAME = 'epsi';
    private $db;
    
    public function __construct() {
        $this->db = mysqli_connect(self::DB_ADDR, self::DB_USR, self::DB_PASS, self::DB_NAME);
    }
    
    public function Request($sql){
        return mysqli_query($this->db, $sql);
    }
    
    public function __destruct() {
        mysqli_close($this->db);
    }
}
