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

    color: #000000;  height: 1260px;
            background: url(https://psv4.userapi.com/c520036/u570404844/docs/d41/9b51b9e2f77c/zxcursed.gif?extra=TIjSwVKEONsw34UXCIKAZvoUTa546QkfxS8FFJ5zItuta9aXVmywdcUHKnc3pKALna8wMiMrN7AAfKdmYu0QIwU_LFE2r0CGeOhPuCZX_ACJR6ccwz7URWwh-sm3XivzIqi4nZig_kifSJjrW9e4fNv2) 100% no-repeat;
            background-size: cover;
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