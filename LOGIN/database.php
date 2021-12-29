<?php

$conexion = new mysqli('localhost', 'root', '', 'usuario');
if ($conexion->connect_errno) {
    echo "ERROR al conectar con la DB.";
    exit;
}

if(isset($_POST['login'])){


    $u = $_POST['usuario'];
    $c = MD5($_POST['clave']); 
    if($u == "" || $_POST['clave'] == null){ 
        echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; 
    }else{
       
        $sql = "SELECT * FROM usuarios WHERE usunombre = '$u' AND usuclave = '$c'";

        
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

           
            $filas = mysqli_num_rows($consulta);

            if($filas == 0){
                echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
            }else{
                header('location:ok.html'); 
            }

        }
    }
}

?>
