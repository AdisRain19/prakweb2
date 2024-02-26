<?php

$animals = ["k"=>"Kucing", "a"=>"Ayam", "b"=>"banteng", "i"=>"Ikan"];
echo 'Ini hewan dengan index ke 1 :' .$animals["b"];
echo "<br>";
echo 'Ini hewan dengan index ke 3 :' .$animals["i"];
echo '<br>';
//membuat array looping foreach
foreach ($animals as $animal) {
    echo '<li>' .$animal. '</li>';
}