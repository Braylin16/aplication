<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a Aplication</title>
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
                <h2 class="h2">Inicia Sesion</h2>

                <input type="text" name="email" placeholder="Correo electronico"><br/>
                <input type="text" name="password" placeholder="Contrase&ntilde;a"><br/>
                <button type="submit" name="login">Entrar</button><br/>
                <a href="register.php">Aun no tienes cuenta ?</a>
            </form>
        </article>
    </main>

    <!-- Pie de pagina de la web -->
    <footer>
        <p>Todos los derechos reservados . Aplication &copy;2019</p>
    </footer>
    
</body>
</html>