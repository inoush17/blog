<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <title>Inscription</title>
</head>
<body>
    <?php
        require_once '../includes/menu.php'
    ?>

    <div class="signin">
        <form action="">
            <label for="email">Adresse Email</label>
            <input type="email" name="email" id="username" placeholder="Saisir votre adresse email ici" required>

            <label for="username">Nom t'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le nom d'utilisateur ou le pseudonyme ici minlenght="5" maxlength="20" required>

            <label for="password">mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici minlenght="8" maxlength="20" required>

            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation" placeholder="confirmez votre mot de passe ici minlenght="8" maxlength="20" required>

            <button type="submit">S'inscrire</button>

            <p>Déjà un compte? Connectez-vous en cliquant <a href="/blog/pages/connexion.php?page=connexion">ici</a></p>
        </form>
    </div>
</body>
</html>