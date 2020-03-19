<?php

class Connection {
    public static function make(){
        $dsn = 'mysql:host=localhost;dbname=scores';
        $user = 'root';
        $password = '';
        try {
            return new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}


