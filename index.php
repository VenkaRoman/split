<?php

$data = "2015/12/07-05.12.2015";
// присвюємо значення змінним розбивши рядок $data, роздільник - "-"
list($firstdate, $seconddate) = explode("-", $data); 
// текст переводимо в формат дати
$a = strtotime($firstdate);
$b = strtotime($seconddate);
// знаходимо різницю між датами
$diff = date("z", $a)-date("z", $b);
// виводимо результат
echo '<br> First date: '. date("m.d.y", $a); 
echo '<br> Second date: '. date("m.d.y", $b);
echo '<br> diff: '. $diff;
