<?php
require_once ("theo2.php");
$req="select * from clients";
$res=$pdo->query($req) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/bootstap.min.css">
        <title>Les mots de passe</title>
    </head>
    <body>
        <table border=1px solid>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>prenom</th>
                    <th>adresse</th>
                </tr>
            </thead>
    </tbody>

<?php while($pass=$res->fetch()){//correspondant ou apporte ?>
    <tr>
        <td><?php echo($pass['Numéro'])?></td>
        <td><?php echo($pass['nom'])?></td>
        <td><?php echo($pass['prenom'])?></td>
        <td><?php echo($pass['addresse'])?></td>
    </tr>
</tbody>
<?php }?>
</table>
</body>
</html>