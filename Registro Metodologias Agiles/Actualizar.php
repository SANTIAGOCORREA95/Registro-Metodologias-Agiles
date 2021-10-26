<?php 
    include("Conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>ACTUALIZAR USUARIO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
</head>
<body>
            <div align="center" class="contenedor p-4">
					<div class="form-row">
                        <div align="center" class="col-md-8">
                        <br><br>
                            <h1>Actualizar Datos</h1>
                    <form action="update.php" method="POST">
                    
                     <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                     <input type="text" class="form-control mb-3" name="Nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">

                     <input type="text" class="form-control mb-3" name="Email" placeholder="Email" value="<?php echo $row['email']  ?>">
                <div align="center" class="d-grid gap-2 col-6 mx-auto" >          
                    <input type="submit" class="btn btn-light btn-lg" value="Actualizar">
                </div>
                    </form>
                    
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>