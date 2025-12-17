<?php
$file = fopen('data/data.txt', 'r');
while (!feof($file)) {
echo fgets($file);
echo '<br>';
}
fclose($file);
?>