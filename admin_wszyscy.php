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

$content = '<table border>
        <!-- tr = wiersz tabeli -->
        <tr>
            <!-- td = komorka tabeli -->
            <th>Id uzytkownika</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Email</th> 
        </tr>';
  
$title = "Lista użytkowników";

        
foreach(db_lista_uzytkownikow() as $uzytkownik)
{
  $content.='<tr>
            <td>'.$uzytkownik['id'].'</td>
            <td>'.$uzytkownik['imie'].'</td>
                <td>'.$uzytkownik['nazwisko'].'</td>
            <td>'.$uzytkownik['email'].'</td>
        </tr>';
}
  
$content .= '</table>';
include 'szablony/klient.php';
echo (" <br> <hr size='10'> ");