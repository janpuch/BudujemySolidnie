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
$content = '<table border>
           <tr> 
               <th>Usługa</th>
               <th>Cena</th>
               <th>Data realizacji</th>
           </tr>';
  $title = "Zamowienia"; 
           
foreach(db_znajdz_historie($uzytkownik['id']) as $usluga)
{
  $content .= '<tr><td>'.$usluga['nazwa'].'</td>
                   <td>'.$usluga['cena'].'</td>
                   <td>'.$usluga['czas_wykonania'].'</td></tr>';
}

$content .= '</table>';

include 'szablony/klient.php';
