<?php include("../php/bd.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="website icon" href="../img/home.png">
    <title>Inicio de sesión</title>
</head> 
<body>
    <div class="flex justify-center mt-32 mx-64">
        <form class="py-48 text-center" action="">
            <h2 class="fs-3 mb-24">Inicio de sesión</h2>
            <div>
            <label for="user">Ingresa tu nombre de usuario:</label>
            <input type="text" id="user" name="user">
            </div>
            <div>
            <label for="password">Ingresa tu contraseña</label>
            <input type="password" name="password" id="password">
            </div>
            <button type="submit">Iniciar</button>
        </form>
    </div> 
</body>