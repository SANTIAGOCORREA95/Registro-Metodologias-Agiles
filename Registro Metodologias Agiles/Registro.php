
	<?php
	include("Conexion.php");
	$con=conectar();

	$id=$_POST['id'];
	$nombres=$_POST['Nombres'];
	$email=$_POST['Email'];


	$sql="INSERT INTO usuario VALUES('$id','$nombres','$email')";
	$query= mysqli_query($con,$sql);

	if($query){
		Header("Location: index.php");
		
	}else {
	}
	?>