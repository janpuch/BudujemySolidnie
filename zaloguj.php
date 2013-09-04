<?php header('Content-Type: text/html; charset=utf-8');

require 'common/db.php';
require 'common/sesja.php';
db_polacz();

if(sesja_czy_zalogowany())
{
    header('Location: historia.php');
    exit;
}

$title = "Logowanie";

if(! $_POST)
{
  $content='<form action="zaloguj.php" method="POST">
            <label for="email">Email:</label>
            <input name="email" /></br>
            <label for="password">Hasło:</label>
            <input type="password" name="haslo" /></br>
            <input type="submit" />
        </form>';
  include 'szablony/gosc.php';	  
}
else
{
  $uzytkownik = db_zaloguj($_POST['email'], $_POST['haslo']);

  if(! $uzytkownik)
  {
    $content='<h2>Niepoprawne dane logowania.</h2>';
    include 'szablony/gosc.php';	  
  }
  else
  {
      sesja_zaloguj($uzytkownik);
      header('Location: historia.php');
  }
}
