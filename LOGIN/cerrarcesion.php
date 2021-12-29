<?

if ($_POST["usuario"]=="miguel" && $_POST["contrasena"]=="qwerty"){
   
    session_name("loginUsuario");
  
   session_start();
    
    $_SESSION["autentificado"]= "SI";
   
    $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
    
    header ("Location: aplicacion.php");
}else {
   
    header("Location: index.php?errorusuario=si");
}
?>