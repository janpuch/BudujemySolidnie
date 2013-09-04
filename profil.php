<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/sesja.php';
db_polacz();

if(! sesja_czy_zalogowany())
{
    header('Location: zaloguj.php');
    exit;
}

$uzytkownik = db_znajdz_klienta($_SESSION['id_klienta']);

if(! $_POST)
{
  $content = '<form action="profil.php" method="POST"><table>
	      <tr><td>Imie</td><td><input name="imie" value="'.$uzytkownik['imie'].'" /></td>
	      </tr><tr><td>Nazwisko</td><td><input name="nazwisko" value="'.$uzytkownik['nazwisko'].'" /></td>
	      </tr><tr><td></td><td><input name="email" value="'.$uzytkownik['email'].'" /></td>
	      </tr><tr><td colspan="2"><input type="submit" value="Popraw profil" /></td></tr>
	      </table></form>';
    $title = "Profil";  
  include 'szablony/klient.php';
}
else
{
  db_popraw_klienta($uzytkownik['id'], $_POST['imie'], $_POST['nazwisko'], $_POST['email']);
  header('Location: profil.php');
}

     