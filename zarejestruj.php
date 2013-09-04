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
        <form action="zarejestruj2.php" method="POST">
        <table><tr><td>Email</td><td>
            <input name="email" /></td></tr>
            <tr><td>Haslo:</td><td>
            <input type="password" name="haslo" /></td></tr><tr><td colspan="2">
             <tr><td>Imie:</td><td>  
             <input name="imie" /></td></tr>
             <tr><td>Nazwisko:</td><td>
             <input name="nazwisko" /></td></tr>
             <tr><td>Telefon:</td><td>
             <input name="tel" /></td></tr>
             <tr><td>Data urodzenia:</td><td>
             <input name="data_urodzenia" /></td></tr>
            <input type="submit" /></tr></td></table>
        </form>
    </body>
</html>
 
