<?php
$a=$_POST['haslo'];
$b=$_POST['potwierdzenie'];
if ((strlen($a)>=10) and (strcmp($a,$b)===0)){
    echo "Twoje haslo jest poprawne";
}else{
    echo "Twoje haslo nie spelnia wymagan(10 znakow, hasla musza byc takie same)";
}
?>