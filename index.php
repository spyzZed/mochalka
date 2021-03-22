<?php
$inputText = ("За что сел? За решетку. Я имею в виду, что сделал? Сел.");
echo $inputText."<br>";
$lengthString = iconv_strlen($inputText);
$words = explode(' ', $inputText);
$wordCount = count($words);
for ($i = 0; $i <= $wordCount; $i++) {
    $sumc = 0;
    for($j = 0; $j <= $wordCount; $j++)
    {
       if($words[$i] === $words[$j])
        {
            $sumc++;
          $wordss[$words[$j]] = $sumc;
        }
    }
}
array_pop($wordss );
foreach ( $wordss as $key => $val ) {
    echo " '{$key}'" . " количество слов"." {$val} <br>" . PHP_EOL;
}
echo "<br>Количество символов: ".$lengthString."<br>Количество слов: ".$wordCount;
?>