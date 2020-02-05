<?php
echo("hoeveel extra lagen wil je dat het krijgt? ");
$nummer = readline();

if (!is_numeric($nummer)){
    exit($nummer." is geen getal");
}

for($i = 1; $i <= $nummer; $i++){
    echo($blok.="*").PHP_EOL;

}
?>