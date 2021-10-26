
    <?php

        include("Conexion.php");
        $con=conectar();

        $id=$_GET['id'];

        $sql="DELETE FROM usuario  WHERE id='$id'";
        $query=mysqli_query($con,$sql);

            if($query){
                Header("Location: index.php");
            }
    ?>