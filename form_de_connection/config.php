<?php 
try 
{
    $bdd = new PDO ('mysql:host=localhost;dbname=form_de _connection', 'root', '');
}catch(Exception $e)
{
    die('Erreur' .$e->getMessage());
}