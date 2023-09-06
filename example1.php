<?php
    echo " Привет!";
$user = array(
    "fio" => "Иванов",
    "name" => "Петр",
    'phone'   => -100,
    'login'  => '300',);
var_dump($user);
$ffff = $user['fio'].' '.$user['name'];
echo $ffff;
?>