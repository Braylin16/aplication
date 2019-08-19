<?php

// Conexion a la base de datos
require_once 'conexion.php';

// Las variables con los mensajes vacios
$errors = "";
$success = "";

// Recibiendo los datos que llegan por POST
if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    // Comprobar en casa de que el usuario olvide un campo
    if(empty($_POST['name'])){
        $errors = "*Cual es tu nombre ? <br/>";
    }

    if(empty($_POST['surname'])){
        $errors .= "*Cual es tu apellido ? <br/>";
    }

    if(empty($_POST['password'])){
        $errors .= "*Debes colocar una contraseña <br/>";
    }

    if(empty($_POST['password2'])){
        $errors .= "*Debes confirmar la contraseña <br/>";
    }

    // cifrar la contraseña
    $password = hash('sha512', $password);
    $password2 = hash('sha512', $password2);

    // Confirmar que la contraseña coicidan
    if($password != $password2){
        $errors .= "*La contraseña no coiciden <br/>";
    }

    // Limpiar las informacion que nos esta llegando
    $name = htmlspecialchars($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $email = htmlspecialchars($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    // Verificar que sea un correo electronico correcto
    if($email == false){
        $errors .= "*Este no es un correo electronico <br/>";
    }

    // Verificar si hay usuarios registrado con ese mismo email
    $statement = $conexion->prepare('SELECT * FROM users WHARE email = :email LIMIT 1');
    $statement->execute(array(':email' => $email));
    $resultados = $statement->fetch();

    if($resultados != false){
        $errors .= "Este correo ya existe";
    }

    // Insertar usuario en la base de datos
    if($errors == ''){
        $statement = $conexion->prepare('INSERT INTO users (id, name, surname, email, password) VALUES(
            null, :name, :surname, :email, :password)'
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':password' => $password
        ));

        $success = "Te has registrado con exito";
        header("Refresh:3; url=index.php");
    }    

}

?>