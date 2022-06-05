<?php

class Model
{
    private $db;

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = '';

        //$this->db = new Database($dbhost, $dbuser, $dbpass, $dbname);
    }

    public function get_database()
    {
        return $this->db;
    }
}
