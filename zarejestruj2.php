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

if(! @$_POST['email'])
{
    header('Location: zarejestruj.php');
    exit;
}

$email_uzyty = db_czy_email_zajety($_POST['email']);

if($email_uzyty)
{
    ?>
        
<h1>Ten mail juz jest w bazie danych.</h1>

    <?php
}
else
{
    db_dodaj_klienta($_POST['imie'], $_POST['nazwisko'], $_POST['haslo'], $_POST['email'], $_POST['tel'], $_POST['data_urodzenia']);
    header('Location: zaloguj.php');
}