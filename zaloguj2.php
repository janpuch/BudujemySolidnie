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

$uzytkownik = db_zaloguj($_POST['email'], $_POST['haslo']);

if(! $uzytkownik)
{
    ?>
        
<h1>MASZ ZUE HASŁO NOOBIE</h1>

    <?php
}
else
{
    sesja_zaloguj($uzytkownik);
    header('Location: historia.php');
}