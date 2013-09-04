<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/sesja.php';
db_polacz();

$uzytkownik = sesja_czy_zalogowany();

if(! $uzytkownik)
{
    header('Location: zaloguj.php');
    exit;
}

if($uzytkownik['uprawnienia'] != 2)
{
    header('location: profil.php');
    exit;
}

if(! $_POST)
{
  $content = '<form action="admin_dodaj_klienta.php" method="POST">
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
        </form>';
    $title = "Dodaj użytkownika";
  include 'szablony/klient.php';
}
else
{
    $email_uzyty = db_czy_email_zajety($_POST['email']);

    if($email_uzyty)
    {
	$content = '<h2>Email już użyty w bazie danych.</h2>';
	include 'szablony/klient.php';
    }
    else
    {
     db_dodaj_klienta($_POST['imie'], $_POST['nazwisko'], $_POST['haslo'], $_POST['email'], $_POST['tel'], $_POST['data_urodzenia']);
     header('Location: zaloguj.php');
    }
}