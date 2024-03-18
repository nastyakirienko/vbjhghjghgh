<?php
// PHP-функция для вычисления факториала числа
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Использование цикла для вычисления факториала числа 10
$result = 1;
for ($i = 1; $i <= 10; $i++) {
    $result *= $i;
}
echo "Факториал числа 10: " . $result;
?>



