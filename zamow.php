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
  $content = '<table border>
           <tr> 
               <th>Usługa</th>
               <th>Opis</th>
               <th>Cena [zl]</th>
               <th>Czas realizacji (h)</th>
                <th>Ilość </th>
               <th colspan="2"></th>
           </tr>';
   $title = "Zamow";
           
  foreach(db_znajdz_uslugi() as $usluga)
  {
    $content .= '<tr><td>'.$usluga['nazwa'].'</td>
		     <td>'.$usluga['opis'].'</td> 
		     <td>'.$usluga['cena'].'</td>
		     <td>'.$usluga['czas_wykonania_h'].'</td>
		     <form action="zamow.php" method="POST">
			<td><input type="hidden" name="id_uslugi" value="'.$usluga['id'].'" />
			    <input name="ilosc" /></td>
			<td><input type="submit" value="Zamów" /></td>
		     </form></tr>';
  }
  
  $content .= '</table>';
  
  include 'szablony/klient.php';        
}
else
{
  db_zamow($uzytkownik['id'], $_POST['id_uslugi'], $_POST['ilosc']);
  header('Location: historia.php');
}
