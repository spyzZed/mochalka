<?php
$arr = [
    1 => 'z',
    2 => 'x',
    3 => 'c',
    4 => 'тычка',
    5 => 'пауза',
    6 => 'и',
    7 => 'все',
    8 => 'это',
    9 => 'еще',
    10 => 'раз',

];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #c7b39b url(https://1.bp.blogspot.com/-ysucLXVdIyU/WQliSwvbQxI/AAAAAAAABzM/g9ixKM4eNHEKELxLt5Uda7qWccVwXqOFACEw/w1200-h630-p-k-no-nu/mhesCQc0xlq7DgTp.jpg);
    color: #FFFFFF;  background-size: cover;
        }
    </style>
</head>
<body>
<div>
    <?php
    foreach ($arr as $shadow=>$shadow_fiend) {
        echo  '<pre>' .$shadow . ' - '. $shadow_fiend  ;
        ?>
    <?php }?>
</div> <br>
</body>
</html>