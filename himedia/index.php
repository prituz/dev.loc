<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head></head>
<body>
<pre>
<?php
$f = fopen('himedia_price.csv', 'r');
$out = fopen('himedia_rus.csv', 'w');
$cntr = 0;
while($data = fgetcsv($f, 1024, ';')) {
    $cntr++;
    if($cntr == 1) continue;
    print_r($data);
   
    if(!preg_match('/[a-z]{2,}/', $data[2], $matches)) {
        var_dump($matches);
        $result[] = $data;
        fputcsv($out, $data, ';');
    }
    echo "<p>****************************</p>";
}

print_r($result);




?>
</pre>
</body>
</html>