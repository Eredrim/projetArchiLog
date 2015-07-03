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
        if(strstr(strtolower($sql), 'insert')){
            mysqli_query($this->db, $sql);
            return mysqli_insert_id($this->db);
        }
        return mysqli_query($this->db, $sql);
    }
    
    public function __destruct() {
        mysqli_close($this->db);
    }
}
