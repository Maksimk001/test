<?php 

// $a = 5;
// $b = "76475643535430543657456365";

// echo $b[13];
echo "Задание 1: ";
$arr  = [1, 2, 3, 4, 5];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum = $sum + $arr[$i];
}
echo $sum;




echo " Задание 2: ";
$fakt = 0;
$max = 0;
for ($i = 0; $i < count($arr); $i++) {
    $fakt = $arr[$i];
    if ($fakt > $max) {
        $max = $fakt;
    }
}
echo $max;

echo " Задание 3: ";

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($i = 0; $i < count($arr2); $i++) {
    if ($arr2[$i] % 3 == 0) {
        echo $arr2[$i];
    } else {
        echo " ";
    }
}

// echo " Задание 4: ";


echo " Задание 5: ";
$arr3 = [1, 2, 3, 4, 5, 10, 6, 7, 9];
$a = 0;
$b = 0;
for ($i = 0; $i < count($arr3); $i++) {
    if ($arr3[$i] == 10) {
        $a = 1;
    } else {
        $b = 0;
    }
}
if ($a == 1) {
    echo "Число 10 найдено!";
} else {
    echo "Число 10 не найдено!";
}
//

echo " Задание 6: ";

$arr4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr5 = [];
for ($i = 0; $i < count($arr4); $i++) {
    $arr5 = $arr4[$i];
    echo $arr5[$i];
}





?>