<?php
class My_Db 
{
/**
 * Creer et retourne une instance de PDO (connexion à la base de données)
 * @return \PDO
 */
    static function getDb()
    {
    //Se connecte à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=foinqhmobile', 'root', '');
   
    return $bdd;
    }
}

