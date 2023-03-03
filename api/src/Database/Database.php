<?php

namespace Mylist\Mylist\Database;
use PDO, PDOException;
use Exception;

class Database
{
    private string $_host = 'localhost';
    private string $_database = 'minha_lista';
    private string $_username = 'machinisphp';
    private string $_password = 'php4noobs8';
    public  mixed $_connect;

    # [[ Class instance ]]
    # 1.Instance class and connection with the database
    public function __construct()
    {
        try  {
            $this->_connect = new PDO("mysql:host={$this->_host};dbname={$this->_database}", $this->_username, $this->_password);
            $this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->_connect;
        }catch(PDOException $e) {
            throw new Exception('Error in connect database! '. $e->getMessage());
        }
    }

    # [[ Create account (table user) ]] 
    # 1.Capture username, email, password and confirmation of password
    # 2.Register the data in the database
    function _create($_user, $_email, $_pass) {
        $_create = $this->_connect->query("INSERT INTO user_account(s_username, s_email, s_password, create_at) VALUES('{$_user}', '{$_email}', '{$_pass}', NOW())");
    }

    # [[ Update account (table user) ]] 
    # 1.Captures the session you want to change, the old value and the new value
    # 2.According to the informed data, if any, executes action.
    public function _update($_key, $_newValue, $_oldValue) {
        $_update = $this->_connect->query("UPDATE user_account
        SET $_key = '{$_newValue}'
        WHERE $_key = '{$_oldValue}'");
    }

    # [[ Delete account (table user) ]] 
    # 1.Capture email and password account related
    # 2.According to the informed data, if any, executes action.
    public function _delete($_email, $_pass) {
        $_delete = $this->_connect->query("DELETE FROM user_account WHERE s_email = '{$_email}' AND s_password = '{$_pass}'");
    }
}