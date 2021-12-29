<!DOCTYPE html >
<html>
    <head>
    <meta charset="utf-8">
    <litle>iniciar sesión</litle>
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
    <link href = "https: //fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

<h1>iniciar sesión</h1>
<form action="inicio.php" method="post">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Usuario:<br>
        <input type="text" name="usuario"><br>
        Clave:<br>
        <input type="password" name="clave"><br><br>
        <input type="submit" name="login" value="Ingresar">
    </form>

</form>
</body>
</html>
