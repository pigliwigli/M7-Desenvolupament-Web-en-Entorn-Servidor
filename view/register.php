<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div id="bodyLogin">
    <h2 class="title">Login</h2>
    <form method="POST" action="../controller/porcesar_registro.php" id="styleForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required class="space_marginbm">

        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="mail" required class="space_marginbm">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="space_marginbm">

        <button type="submit" id="submitBtn">Login</button>
    </form>
    </div>
</html>
