<?php

Class Connexion {
    public static function connDb () {
        $db = new mysqli('localhost', 'root', '', 'noticias_sena');
        return $db;
    }
}