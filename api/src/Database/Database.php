<?php

namespace MyList\
class Database
{
    private string $_host = 'localhost';
    private string $_database = 'minha_lista';
    private string $_username = 'joatan';
    private string $_password = '123';
    private object $_connect;
    //joatan 123
    public function __construct()
    {
        try {
            $this->_connect = new PDO("mysql:host={$this->_host};dbname={$this->_database}", $this->_username, $this->_password);
            $this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connect in database';
        } catch (PDOException $e) {
            throw new Exception('Error in connect database: ' . $e->getMessage());
        }
    }
}
