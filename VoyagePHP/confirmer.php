<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de suppression</title>    
    <link rel="stylesheet"  href="CSS/supprimerPHP.css">
    


</head>


<?php 

$id = isset($_POST['id']) ? $_POST['id'] : NULL;

?>



<form method="post" action="supprimer.php">
<input name="id" value="<?php echo $id ?>" type="hidden">
<div> Etes-vous sur de vouloir supprimer l'étape ?</div>
<input class="boutonSupr"  type="submit" value="Supprimer" >
<input  class="annuler" type="button" value="Annuler" onClick="window.location.href='Voyage.php'"/>
</form>


