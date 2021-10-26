<?php 
    include("Conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REGISTRO USUARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="styles.css">
        
    </head>
    <body>

					<div align="center" class="contenedor p-4">
					<div class="form-row">
                        <div align="center" class="col-md-8">
							<br>
                            <h1>Ingrese Datos</h1>
                                <form action="Registro.php" method="POST">

                                    
                                    <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="Email" placeholder="Email">

                                    <div align="center" class="d-grid gap-2 col-6 mx-auto" >
                                    	<input type="submit" class="btn btn-light btn-lg"> 
									</div>
                                </form>
                    	</div>
					</div>
			</div>
			<div align="center" class="contenedor p-4">
	  			<div class="form-row">
                        <div class="col-md-8">
                            <table align="center" class="table" >
                                <thead class="table-dark table-striped" >
                                    <tr align="center">
                                        <th>ID</th>                                    
                                        <th>Nombres</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody class="table-light table-striped">
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                        <tr align="center">
                                         <th><?php  echo $row['id']?></th>                                                
                                         <th><?php  echo $row['nombres']?></th>
                                         <th><?php  echo $row['email']?></th>    
                                         <th><a href="Actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info btn-sm">Editar</a></th>
                                         
                                         <th><a href="Delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a></th>                                        
                                        </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                   </div>  
            </div> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
				<!--***SCRIP DE ICONOS FONT AWESOME***-->
	<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    </body>
</html>