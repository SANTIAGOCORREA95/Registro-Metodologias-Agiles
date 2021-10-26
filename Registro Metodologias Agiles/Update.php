<?php

include("Conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['Nombres'];
$email=$_POST['Email'];

$sql="UPDATE usuario SET  Nombres='$nombres',Email='$email' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>