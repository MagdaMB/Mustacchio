<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link href="style-blog.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>

<body>
    <?php
    include('./components/header.php');
    ?>
    <main>
        <h3>Witaj na naszej stronie</h3>
        <p>Zaloguj się, a przejściu na swój profil, mozesz zostawić nam wiadomosć dotyczącą np rezerwacji terminu</p>

        <form action="log.php" method="post">
            <input type="text" name="login" />
            <input type="text" name="password" />
            <input type="submit" name="button" value="Log in" />
            <input type="submit" name="backToMainPage" value="Back to main Page" />
        </form>
    </main>
</body>

</html>