<?php
try{
    $pdo=new PDO("mysql:host=localhost;dbname=uwimana","root","");
}catch(exception $e){
    die('erreur de connexion:'.$e->getmessage());
}
    ?>