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
            <th>Id uzytkownika</th>
            <th>Imie</th>
            <th>Email</th> 
        </tr>
        
        <?php foreach(db_lista_uzytkownikow() as $uzytkownik)
        {?>
        <tr>
            <td><?php echo $uzytkownik['id']; ?></td>
            <td><?php echo $uzytkownik['imie']; ?></td>
            <td><?php echo $uzytkownik['email']; ?></td>
               
            <td><?php var_dump($uzytkownik); ?></td>
        </tr>
        <?php } ?>
    </table>
   
</html>
