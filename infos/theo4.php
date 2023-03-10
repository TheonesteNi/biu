<?php
require_once("theo2.php");
$login=$_POST['login'];
$pc=$_POST['password'];
$req="select * from clients where nom='$login' and addresse='$pc'";
$res=$pdo->query($req) or die(mysql_error());

if($u=$res->fetch()){
    header("location:theo3.php");
}
else{
    print("Votre identoté n'est pas correcte");
}
?>