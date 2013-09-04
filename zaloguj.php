<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/sesja.php';
db_polacz();

if(sesja_czy_zalogowany())
{
    header('Location: historia.php');
    exit;
}

?>
<html>
    <body>
        <a href="zaloguj.php">Zaloguj się</a>
        <a href="zarejestruj.php">Zarejestruj się</a>
        <form action="zaloguj2.php" method="POST">
            <th>Email:</th>
            <input name="email" />
            <th>Hasło:</th>
            <input type="password" name="haslo" />
            <input type="submit" />
        </form>
    </body>
</html>
