<?php

// Requiere el codigo backend
require_once 'backend/register.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrate en Aplication</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Aplication</h1>
        <h2 id="slogan">Mas haya de las web</h2>
    </header>
    <!-- Contenido de la pagina -->
    <main>
        <article>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="login">
                <h2 class="h2">Registrate, es gratis</h2>

                <input type="text" name="name" placeholder="Nombre" value="<?php if(isset($name)){echo $name;}?>"><br/>
                <input type="text" name="surname" placeholder="Apellidos" value="<?php if(isset($surname)){echo $surname;}?>"><br/>
                <input type="text" name="email" placeholder="Correo electronico" value="<?php if(isset($email)){echo $email;}?>"><br/>
                <input type="password" name="password" placeholder="Contrase&ntilde;a"><br/>
                <input type="password" name="password2" placeholder="Repite la Contrase&ntilde;a"><br/>
                <button type="submit" name="submit">Registrate</button><br/>
                <!-- Mensajes de errores o exito -->
                <?php if(isset($errors)){
                    echo "<span class='errors'>$errors</span>";
                }?>
                <?php if(isset($success)){
                    echo "<span class='success'>$success</span>";
                }?>
                <a href="index.php">Ya estas registrado ?</a>
            </form>
        </article>
    </main>

    <!-- Pie de pagina de la web -->
    <footer>
        <p>Todos los derechos reservados . Aplication &copy;2019</p>
    </footer>
    
</body>
</html>