<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>inscription</h1>

    <form method="POST">
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <input type="submit" value="S'inscrire">
        </div>
    </form>

    <?php
    session_start();

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $_SESSION['user'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];

        setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

        header("Location: profil.php");
        exit();
    }
    ?>

</body>

</html>