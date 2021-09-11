<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etape suprimée</title>    
    <link rel="stylesheet"  href="CSS/supprimerPHP.css">
    


</head>

<?php 

$id = isset($_POST['id']) ? $_POST['id'] : NULL;



try{
    $dbco = new PDO ('mysql:host=localhost;dbname=test','root', '');
    //On définit le mode d'erreur de PDO sur Exception
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $req = $dbco->prepare("DELETE FROM testtable WHERE id='$id' ");
        $req->execute();
        echo 'Données supprimées';
}
      
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}



?>

<input  class="retour" type="button" value="Retour" onClick="window.location.href='Voyage.php'"/>