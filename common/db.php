<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
/*


                                                                                                                                                                            ....~~~~==++II77=..         
                                                                                                                                                                            ...~~~~==++?II7+....        
                                                                                                                                                                            ..~~:~==++?II7+..           
                                                                                                                                                                         .  .~~:~==++?II7+...           
                                                                                                                                                                         ...:~~~==++?II7?....           
                                                                                                                                                                         ..:~~~==++?II7?....            
                                                                                                                                                                      ....:~~~+=++?III?..               
                                                                                                                                                                      ...:~~~==++?II7?...               
                                                                                                                                                                      ..:~~~==++?II77. .                
                                                                                                                                                                      .,~~~==++?II7I..                  
                                                                                                                                                                   ...,~~~=~?+?I7II...                  
                                                                                                                                                                    .,~~~=~++?IIII,...                  
                                                                                                                                                                   .,~~~==++?III7,.                     
                                                                                                                                                                   .~~~=~++?III7:..                     
                                                                                                                                                                ..,~~~==++??I77,. .                     
                                                                                                                                                               ...~~~==++?II7I:....                     
                                                                                                                                                            .  ..~~~~==?+II7I~..                        
                                                                                                                                                              ..~~~~==I?II7I~...                        
                                                                                                                                                            ...~~~~+=I?II$I=.                           
                                                                                                                                                            ..~??O==I+I7$I~.                            
                                                                                                                                                         ....~==I7=???I77+...                           
                                                                                                                                                         ...~=++$++I??77=...                            
                                                                                                                                                         ..~=Z~87=II7$I+.                               
                                                                                                                                                         .:~Z~I=+?7$7I+..                               
                                                                                                                                                      ...:==+~+=+7$7I?.                                 
                                                                                                                                                      ..:?~Z++=+7$7I?...                                
                                                                                                                                                    ...,$7=I+=+I$7I?..                                  
                                                                                                                                                    ..:~~~==++I777?...                                  
                                                                                                                                                   ..,IODD+++?77I?. ..                                  
                                                                                                                                                   ..7~~~8N??7II?..                                     
                                                                                                                                                ....N~~~+Z7II7II...                                     
                                                                                                                                               ...,~ZZ~=Z7I7I7I....                                     
                                                                                                                                                 .=~~~=++?777I,....                                     
                                                                                                                                                .==~==++?77II, .                                        
                                                                                                                                            .. .~=~~=++?77II,...                                        
                                                                                                                                            . .~~~~=++?777I,                                            
                                                                                                                                            ..~?~==++?77I7:.                                            
                                                                                                                                         ....~?Z=7?+?7777:..                                            
                                                                                                                                         ...~~?7+O+?77I7,...                                            
                                                                                                                                         ..~~~=~==?7II7~.                                               
                                                                                                                                         .~=~=~+==III7= .                                               
                                                                                                                                      ...:~==~+++III7=..                                                
                                                                                                                                      ..:=~~~+???I$I~.                                                  
                                                                                                                                      .:==~=+??II$I=..                                                  
                                                                                                                                    ..,=~~==?III7I+..                                                   
                                                                                                                                   ..,=====IIII7I?.                                                     
                                                                                                   ,                               .,~~~==?III7I+..                                                     
                                                                                                  ,,,.                         ....Z~~~~=???I7??...                                                     
                                                                                                .,,,,                          ...OND===??II7?I.. .                                                     
                                                                                               ,,.,,. ,,.                      ..7DNNNN$??III?...                                                       
                                                                                              ., ,,,,,,,, .                    .INNNNNNNMNO$?...                                                        
                                                                                           .,,  .,,. ,,. ..,                ...+NNNNNNNNNNNN8. .                                                        
                                                                                          . ,,     ,,,   ,,,,  .            ..,ND7+NNNNNNNND..                                                          
                                                                                        .,,..,.  ..,...,,,..,,,.            .,NNNZNNNNNNNND.                                                            
                                                                                       .. .,,,, .:$8NDNNNDN8I...            ,DDN8NNNNNNNND..                                                            
                                                                                    .,,,,,....7NNDDDDDDNDDDDDDN8:,.      ...DDNNNNNNNNNND..                                                             
                                                                                   .,,  .,,,ID8DDDDDDDDDNNDDDDNNNZ:.     ..ODDDDNNNNNNND,                                                               
                                                                                   .,,....?MDD88DDDDDDDDDDDDNNNDDDD7......$DDDDDNNNNNND..                                                               
                                                                                .   ,,,..8NND8O88888DDDDDDDNNDDNNNNNN+...=DDDDDNNNNNNN..                                                                
                                                                               ,,,,..,,7DNND8Z$ZOO888DDDDDDDDDDNNDDDDDND8DDDDDNNNNNDD.                                                                  
                                                                              ,, .,,.:D8DDD8Z77$$ZOO88DDDDDDDDNNDDDDDNNDDDDDDNNNNNDD:.                                                                  
                                                                           ...,,..,,DDDDDDDO$7777$$ZO88DDDDDDDDD8DDNNDDDDD8DNNNDNDD$ .                                                                  
                                                                          .,: .:,:ODDNDDDD8Z$7IIIII7$ZO88DDDDDDDDDNNDDDDDDNNNNNNDNN7..                                                                  
                                                                         ,,..,..ZDNDDDDNDDO$77IIIIII7$ZO88DDDDDDDDDDNDDDDMMNNNNNNND=..                                                                  
                                                                        ,,,.,,?DDDNDDDDDDDOZ77IIIIII77$ZO888DDDDDDDDNNDDNMMNNMMMNNNI .                                                                  
                                                                         .,,IDDNNNDDNDDDD8OZ$77IIIII77$ZOO88DDDDDDDD8DDNMNNNMMMNNDZD..                                                                  
                                                                    ,    .=NNNNNDDDDDDDDD8OZ$7IIIIII77$$ZOO8DDDDDDNDDDNMNNMMMNMN88DNND=....                                                             
                                                                   .,,..=DDDDNDDDNNDDDDDD8OZZ$7777777777$ZO88DDDDNDDDNNNNMMNNNN8DNNNDDDND:.                                                             
                                                                    .,~NDDNNNDDDDDDDDDDDD88OZZ$$$$$7777$$OO8DDDDDDDDNNNNNNNNND88NNDDDDDDDNZ.                                                            
                                                                   .:DDNNNNDDDDNDDDDDDDD88OOZZZ$Z$$$$7$$ZOO8DDDNDDDNNNNMMNND88DNNDDDDDDDDDNN..                                                          
                                                                 .:NDDDDNNDDNNNDDDDDDDDD88OOZZOZZZ$$$$ZZZO8DDDNDDDNNNNMMNND88DNDDDDDDDDDDDNNN...                                                        
                                                                :NNNDDDDDDDDNDDDDDDDDDD88OOOOOOOOOOZZZOOO8D8DDD8ONNNNMMNNO8DDDDDDDDDDDDDDDNNDD..                                                        
                                                            ...DNNNNNNDDDDDDDDDDDDDDD888OOOOOOOOOOOOOOZOOD88DD8ONNNNNNNNO88DDDDDDDDDDDDDDNNNNN,.                                                        
                                                         ....DNNNNNNNNNDDDDDDDDDDDDD888888888OOOOOOOOOO8DZ88DZ8NNNNNNN8$8DDDDDDDDDDDDDDDDNNNNNI.                                                        
                                                        . ,8NNNNNNNNNNNDDDDDDDDDDD88888888D8D88888888D8D$O8D?DNDNNNND?Z8DDDDDDDDDDDDDDNNNNNNNN$.                                                        
                                                        ,DNNNNNNNNNNNNNNNDDDDDD8D8DD8888DDD88D88D888DD8$OO$$NNNNNNN$I8DDDDDDDDDDDDDDDDNNNNNNNN7.                                                        
                                                      .ONNNNNNNNNNNNNNNNNDDDDDDDDD8DDDDD8D888888888DD7$$OI8NDNNNDDI$8DDDNDDDDDDDDDDDNNNNNNNNNN:.                                                        
                                                   ..ONNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDD888888DDDZI$8IND8NNN8$$8DDNDDDDDDDDDDDDDNNNDNNNNNN8..                                                        
                                                 ..8NNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDDD8DDDD$7IZZONODNNNZ$8DDDDDDDDDDDDDDDDDNNNDDDDDNNN,..                                                        
                                               ..8NNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDDNDNDZ77?DINZ8DD8OO8DDDDDDDDDDDDDDDDDDNDDD8OODNNN,...                                                        
                                            ...ONNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDD8$$7$8OD$DNO8O8DDDDDDDDDDDDDDDDDDDDDO$77ZDNNN:.                                                           
                                         ....ONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNDDDDDDDDDDDD8ZI$IDOD78D8D88DDDDDDDDDDDDDDDDDD88O7++?7ZDNND.                                                             
                                        ...8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNND8$IZ$ZOD7$DO888DDDDDDDDDDDDDDDDD8O$I+?O8DDNNNNI                                                               
                                         :NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNND8IIOZ78DZIO$DDDDDDDDDDDDDDDDDDDD8ZI++$8DNNNNNND,.                                                               
                                         .,NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNND$+$Z87NI?IDDDDDDDDDDDDDDDDDDDD8ZI??$DDNNNNNNNZ .                                                                
                                           .8NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNNND8DNDIN77DDDDNDDDDDDDDDDDDDDD8OI+?ZDNNNNNNNND,.                                                                  
                                            .=NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDNNNNNNNNDN8?ONNDNNNDD888DDDDDDDDDDD87??ZDNNNNNNNNNI                                                                     
                                              .?NNNNNNNNNNNNNNNNNNNNNNNNNNNNDNDDNNNNNNNNNNNNNNNNND8888888DDDDDDD88ZI?$DNNNNNNNNN8,.                                                                     
                                               ..$NNNNNNNNNNNNNNNNNNNNNNNNNNDNDNNNNNNNNNNNNNNNND8OOOO8888DDDDDD88Z?IODNNNNNNNNNZ.                                                                       
                                                ..,8NNNNNNNNNNNNNNNNNNNNNNNNDDDDDNNNNNNNNNNNNNNND8OOOO888DDDDD88$?ZDNNNNNNNNND,.                                                                        
                                                    .8NNNNNNNNNNNNNNNNNNNNNNNDDDDNNNNNNNNNNNNNNNDD8OO8888DD888OI78DNNNNNNNNNI                                                                           
                                                      :DNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDD888888D888O$IZDDNNNNNNNND,                                                                            
                                                        ~NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDD8888888OZ7IODNNNNNNNNN7.                                                                             
                                                          =NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDD88OZ$778DNNNNNNNN8:                                                                               
                                                         . .?NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDD8O$77$8NNNNNNNNN7..                                                                               
                                                            ..?NNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDD8O$77ZDNNNNNNNND.                                                                                  
                                                            ....ONNNNNNNNNNNNNNNNNNNNNNNNNNNNDNDNNNDD8Z7$ZDNNNNNNND7..                                                                                  
                                                                 .ZNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNND8Z7$ODNNNNNNN8.                                                                                     
                                                                 ...ZNNNNNNNNNNNNNNNNNNNNNNNNNNNNNDDZ7Z8DNNNNNND?..                                                                                     
                                                                   ...ZNNNNNNNNNNNNNNNNNNNNNNNNNNDDO7Z8NNNNNNNO..                                                                                       
                                                                   .. .,ONNNNNNNNNNNNNNNNNNNNNNNDDO$Z8NNNNNND?..                                                                                        
                                                                        ..ONNNNNNNNNNNNNNNNNNNNND8$ZDNNNNNDO.                                                                                           
                                                                         ...$NNNNNNNNNNNNNNNNNNN8$ODNNNNND:.                                                                                            
                                                                           ...ZNNNNNNNNNNNNNNND8$ODNNNNDI..                                                                                             
                                                                            . .,8NNNNNNNNNNNND8ZODNNNND,.                                                                                               
                                                                                ..8NNNNNNNNND8ZODNNNDI .                                                                                                
                                                                               ... .ONNNNNND8ZODNNNO..                                                                                                  
                                                                                    ..ZNNND8Z8DNND:.                                                                                                    
                                                                                      ..ZN8OODNNZ..                                                                                                     
                                                                                        ..IDNND:                                                                                                        
                                                                                           ... .                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
                                                                                                                                                                                                        
*/

function db_polacz()
{
    global $dbHandle;
    $db_dane = require 'common/db_conf.php';
    
    $dbHandle = new PDO('mysql:dbname='.$db_dane['dbname'].';host='.$db_dane['host'], $db_dane['user'], $db_dane['pass']);
    $dbHandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}

function db_lista_uzytkownikow()
{
    global $dbHandle;
    
    $uzytkownicy = $dbHandle->query('select * from klient')->fetchAll(PDO::FETCH_ASSOC);
    return $uzytkownicy;
}

function db_zaloguj($email, $haslo)
{
    global $dbHandle;
    
    $uzytkownik = $dbHandle->query('select * from klient WhErE email = "'.$email.'" AnD haslo = "'.$haslo.'"')->fetch(PDO::FETCH_ASSOC);
    return $uzytkownik;
}

function db_znajdz_klienta($id)
{
    global $dbHandle;
    
    $uzytkownik = $dbHandle->query('select * from klient where id='.$id)->fetch(PDO::FETCH_ASSOC);
    return $uzytkownik;
}

function db_znajdz_historie($id_klienta)
{
    global $dbHandle;

    return $dbHandle->query('select * from historia left join uslugi ON uslugi.id = historia.id_uslugi
        where id_uzytkownika = "' .$id_klienta.'" ORDER BY czas_wykonania')->fetchAll(PDO::FETCH_ASSOC);
}

function db_znajdz_uslugi()
{
    global $dbHandle;
    
    $uslugi = $dbHandle->query('select * from uslugi')->fetchAll(PDO::FETCH_ASSOC);

    foreach ($uslugi as &$usluga)
    {
        $promocja = $dbHandle->query('select * from promocje where id_uslugi='.$usluga['id'])->fetch(PDO::FETCH_ASSOC);
        if($promocja)
        {
            $usluga['cena'] = $promocja['cena_promocyjna']/100;
        }
        else 
        {
           $usluga['cena'] = $usluga['cena_std']/100;
        }
    }
    
    return $uslugi;
}

function db_zamow($id_klienta, $id_uslugi, $ilosc)
{
    global $dbHandle;
    
    $usluga = $dbHandle->query('select * from uslugi where id='.$id_uslugi)->fetch(PDO::FETCH_ASSOC);
    $promocja = $dbHandle->query('select * from promocje where id_uslugi='.$usluga['id'])->fetch(PDO::FETCH_ASSOC);
    
    if($promocja)
    {
        $usluga['cena'] = $promocja['cena_promocyjna']/100;
    }
    else 
    {
        $usluga['cena'] = $usluga['cena_std']/100;
    }
        
    $czas_wykonania = date('Y-m-d H:i:s', (time() + $usluga['czas_wykonania_h'] * 60 * 60 * $ilosc));
    
    $dbHandle->exec('INSERT INTO historia (id_uslugi, id_uzytkownika, cena, czas_wykonania) 
        VALUES ('.$id_uslugi.', '.$id_klienta.', '.$usluga['cena'] * $ilosc.', "'.$czas_wykonania.'")');
}

function db_popraw_klienta($id_klienta, $imie, $nazwisko, $email)
{
    global $dbHandle;    
    $dbHandle->exec('UPDATE klient SET imie = "'.$imie.'", nazwisko = "'.$nazwisko.'", email = "'.$email.'" where id = '.$id_klienta);
}

function db_czy_email_zajety($email)
{
    global $dbHandle;
    return $dbHandle->query('SELECT * FROM klient WHERE email="'.$email.'"')->fetchAll(PDO::FETCH_ASSOC);
}

function db_dodaj_klienta($imie, $nazwisko, $haslo, $email, $telefon, $data_urodzenia)
{
   global $dbHandle;
   $dbHandle->exec('INSERT INTO klient (imie, nazwisko, haslo, email, tel, data_urodzenia) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$haslo.'", "'.$email.'", "'.$telefon.'", "'.$data_urodzenia.'");
}
    
////////////////////////////////////////////////////////////////
// HEHE IKS DE, ADMIN LOLZ

function db_lista_zamowien()
{
   global $dbHandle;
   
   $zamowienia = dbHandle->query(SELECT * FROM klient LEFT JOIN (historia LEFT JOIN uslugi ON uslugi.id = historia.id_uslugi)
       ON historia.id_uzytkownika = klient.id');
   
   if(! $zamowienia)
   {
       return array();
   }
   else
   {
       return $zamowienia->fetchAll(PDO::FETCH_ASSOC);
   }
}