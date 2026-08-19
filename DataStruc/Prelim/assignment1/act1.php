<?php
//Static array with fixed size (5 elements)
$numbers = array_fill(0, 5, 0);

//Assign values
for ($i = 0; $i < count($numbers); $i++) {
    $numbers[$i] = $i * 10;
}

//Display arry values
foreach ($numbers as $index => $value) {
    echo "Index $index: $value<br>";
}
?>