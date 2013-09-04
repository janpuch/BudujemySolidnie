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

$content = '
    <table>
        <!-- tr = wiersz tabeli -->
        <tr>
            <!-- td = komorka tabeli -->
            <th>Id uzytkownika</th>
            <th>Imie</th>
            <th>Email</th> 
        </tr>';
        
foreach(db_lista_zamowien() as $zamowienie)
{
  $content.='<tr>
            <td>'.$zamowienie['id'].'</td>
            <td>'.$zamowienie['nazwisko'].'</td>
            <td>'.$zamowienie['cena'].'</td>
        </tr>';
}

$content .= '</table>';
include 'szablony/klient.php';

