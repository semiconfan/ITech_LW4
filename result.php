<?php
$vote = $_POST['vote'];

// Читання поточних результатів голосування
$file = file_get_contents('votes.txt');
$data = unserialize($file);

// Оновлення результатів голосування
$data[$vote] += 1;
$file = fopen('votes.txt', 'w');
fwrite($file, serialize($data));
fclose($file);

// Виведення результатів голосування
echo "Результати голосування: " .  "<br>";

echo "C++:  " . $data['cpp'] ."<br>";
echo "PHP:  " . $data['php'] ."<br>";
echo "Java: " . $data['java'] ."<br>";
?>