<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="../controller/controller.php" id="loginForm">
        <h2 class="title">Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required class="space_marginbm">

        <label for="mail">Correo electrónico:</label>
        <input type="email" id="mail" name="mail" required class="space_marginbm">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="space_marginbm">

        <button type="submit">Login</button>
    </form>
</html>
