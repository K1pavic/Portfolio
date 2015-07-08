<?php
$server = "localhost";
$username = "root";
$password = "";

//funkcija za spoj na mysql server
if (!$spoj=@mySQL_connect($server, $username, $password))
{
die ("<b>Došlo je do pogreške i nismo se mogli spojiti na MySQL server</b>");
}
//funkcija za odabir baze na serveru
if (!mySQL_select_db("users", $spoj))
{
die ("<b>Odabrana je pogrešna baza podataka.</b>");
}

?>