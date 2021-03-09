<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-read-all.css">
    <title>Rechercher un utilisateur</title>
</head>
<body>
    <header>
        <img src='img/smala-logo.svg' alt='bannière smala verte et blanche'>
        <h1>Rechercher un utilisateur</h1>
    </header>
    <main>
        <form method="post">
            <input type="text" name="pseudo" placeholder="pseudo" required></p>
            <input class='petit-btn' type="submit" name="search_user">
        </form>
    </main>
    <footer>
        <form method='post' action='?admin'>
            <button class='gros-btn' type='submit'>Retour</button>
        </form>
    </footer>
</body>
</html>