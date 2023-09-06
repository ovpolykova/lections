<?php
$user = [
    'fio' => 'Ivanov',
    'name' => 'Ivan',
    'parent' => 'Ivanovich',
    'adress' => 'g.Ivanovo Ivan street,50',
    'login' => 'Ivanov',
    'password' => 'Ivanov',
    'phone' => 89524654233,
];
var_dump($user);
$users = [[
    'fio' => 'Ivanov',
    'name' => 'Ivan',
    'parent' => 'Ivanovich',
    'adress' => 'g.Ivanovo Ivan street,50',
    'login' => 'Ivanov',
    'password' => 'Ivanov',
    'phone' => 89524654233,
    'ball' => 4,
],
 [
    'fio' => 'Petrov',
    'name' => 'petr',
    'parent' => 'Ivanovich',
    'adress' => 'g.Ivanovo Ivan street,50',
    'login' => 'Ivanov',
    'password' => 'Ivanov',
    'phone' => 8333333,
    'ball' => 4,
],
[
    'fio' => 'Sidirov',
    'name' => 'Sidor',
    'parent' => 'Ivanovich',
    'adress' => 'g.Ivanovo Ivan street,50',
    'login' => 'Ivanov',
    'password' => 'Ivanov',
    'phone' => 892222233,
    'ball' => 5,
]];
var_dump($users);

//$fio = $user['fio'].' '.$user['name'].' '.$user['parent'];
$fio = $users[1]['fio'].' '.$users[1]['name'].' '.$users[1]['parent'];
echo "<h2>$fio</h2> 
        <p> Adres:".$users[0]['adress']." Phone: ".$users[2]['phone'];

echo "<br>---Одномерный массив--";
foreach ($user as $val)
{
    echo '<br>'.$val;
}
echo "<br>------------";
foreach ($user as $key=>$val)
{
    echo "<br>$key = $val";
}
echo "<br>---Двумерный массив--";
echo "<table>";
foreach ($users as $val)
{
    echo "<tr>";
     foreach ($val as $key=>$value) {
        if ($key == 'ball' and $value == 5){
            echo '<td style="color: red"><strong>'. $value.' </strong> </td>';
        }
        else {
        echo "<td> $value </td>";
    }
    }
    echo "</tr>"; 
}
echo "</table>";
?>