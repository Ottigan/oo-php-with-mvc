<?php

declare(strict_types=1);
require "../vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OO PHP with MVC Pattern</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<body>
    <section class="container">
        <?php
        $user = new App\Views\UsersView();
        $user->displayUser("Janis");
        ?>
        <form action="" method="POST">
            <label for="username">Username</br><input id="username" name="username" type="text" minlength="8" maxlength="20" pattern="[a-zA-Z ]+" required></label>
            </br></br>
            <label for="password">Password</br><input id="password" name="password" type="password" minlength="6" maxlength="20" required></label>
            </br></br>
            <button type="submit">Submit</button>
            <button type="submit" formaction="">Sign Up</button>
        </form>
    </section>
    <script src="js/index.js"></script>
</body>

</html>