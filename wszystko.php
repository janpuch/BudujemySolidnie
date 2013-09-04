<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/admin_sesja.php';
db_polacz();

if(! sesja_czy_zalogowany_admin())
{
    Header('Location: wszystko.php');
}

?><html>
    <table>
        <!-- tr = wiersz tabeli -->
        <tr>
            <!-- td = komorka tabeli -->
            <th>Id zamowienia</th>
            <th>Klient</th>
            <th>Wszystko</th>
        </tr>
        
        <?php foreach(db_lista_zamowien() as $zamowienie)
        {?>
        <tr>
            <td><?php echo $zamowienie['id']; ?></td>
            <td><?php echo $zamowienie['nazwisko'].' '.$zamowienie['imie']; ?></td>
            <td><?php echo $zamowienie['cena']; ?></td>
               
            <td><?php var_dump($zamowienie); ?></td>
        </tr>
        <?php } ?>
    </table>
   
</html>
