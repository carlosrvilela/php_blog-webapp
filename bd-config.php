<?php
$mysql = new mysqli(hostname:'localhost', username:'root', password:'', database:'blog');
$mysql->set_charset('utf8');

if ($mysql == false){
    print "Erro na coexão<br/>";
    var_dump($mysql); 
}
