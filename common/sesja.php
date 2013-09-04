<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php

session_start();

function sesja_czy_zalogowany()
{
    if(! @ $_SESSION['id_klienta'])
    {
        return false;
    }
    
    $uzytkownik = db_znajdz_klienta($_SESSION['id_klienta']);
    return $uzytkownik;
}

function sesja_zaloguj($uzytkownik)
{
    $_SESSION['id_klienta'] = $uzytkownik['id'];
}

function sesja_wyloguj()
{
    session_destroy();
}