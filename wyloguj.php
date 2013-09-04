<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

require 'common/db.php';
require 'common/sesja.php';
db_polacz();

if(sesja_czy_zalogowany())
{
    sesja_wyloguj();
}

header('Location: zaloguj.php');
