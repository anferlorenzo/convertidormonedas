<?php 

include("conexion.php");

if(isset($_POST['registro']))
{

    if(strlen($_POST['cantidad']) >= 1)
    {
        $cantidad = trim($_POST['cantidad']);
        $moneda1 = trim($_POST['Moneda1']);
        $moneda2 = trim($_POST['Moneda2']);
        $consulta = "INSERT INTO datos(cantidad, moneda1, moneda2) VALUES ('$cantidad','$moneda1','$moneda2')"; 
        $exito = mysqli_query($enlace,$consulta);
    }
}

?>