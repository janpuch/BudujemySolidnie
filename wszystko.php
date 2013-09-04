<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/admin_sesja.php';
db_polacz();

if(! sesja_czy_zalogowany_admin())
{
    Header('Location: index.php');
}

$title = "Spis zamówień";

$content = '<table>
        <!-- tr = wiersz tabeli -->
        <tr>
            <!-- td = komorka tabeli -->
            <th>Id zamowienia</th>
            <th>Klient</th>
            <th>Wszystko</th>
        </tr>';
        
foreach(db_lista_zamowien() as $zamowienie)
{
  $content .='<tr>
            <td>'. $zamowienie['id'].'</td>
            <td>'.$zamowienie['nazwisko'].' '.$zamowienie['imie'].'</td>
            <td>'. $zamowienie['cena'].'</td>
               
            <td><?php var_dump($zamowienie); ?></td>
        </tr>';
}

include 'szablony/klient.php';
