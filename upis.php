<?php
    include "spoj.php";
    $query = "INSERT INTO login (ime, prezime, adresa, e_mail, kor_ime)
    VALUES('$_POST[ime]','$_POST[prezime]', '$_POST[adresa]', '$_POST[email]', '$_POST[korisnik]')";
    
    if(mysql_query($query))
    {
        echo "Pohranili smo podatke o studentu.<br>";
    } else {
        echo "Nismo mogli pohraniti podatke"."<br>".mysql_error();
    }
?>