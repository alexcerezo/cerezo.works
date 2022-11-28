<html>

<head>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL='https://www.iwocraft.ml'">

<?php
header("Location: https://www.youtube.com"); 
$nombre = $_POST['user'];
$correo = $_POST['email'];
$mensaje = $_POST['password'];
$FileCount = count( glob('user-data/*.html') );
$pagina = $FileCount + 1;

$message=  <<<EOD

<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" media="screen and (min-device-width: 800px)" href="../css/style.css">
    <link rel="stylesheet" media="screen and (max-device-width: 799px)" href="../css/small.css">
    <title>Datos de $user</title>
    <link  rel="icon" href="img/Logo.svg" type="image/svg"/>
</head>
<body>
        <div class="background-signup">
            <div class="shape"></div>
            <div class="form">
                <h2>Datos de $user</h2>
                <form>
                    <p>Usuario</p>
                    <input type="text" name="user" placeholder="IWO550" value="$user">
                    <p>Correo</p>
                    <input type="text" name="email" placeholder="name@domain.com" value="$email">
                    <p>Contraseña</p>
                    <input type="password" name="password" placeholder="TZv217O%!Yee" value="$password">
                    <button type="submit" >Guardar</button>
                </form>
            </div>
            <div class="shape"></div>
        </div>
</body>
</html>


EOD;

$archivo=fopen("user-data/$email.html","w");
fwrite($archivo,$message);
?>


<head>

</html>
