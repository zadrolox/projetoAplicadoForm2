<?php
$timeA = $_POST['timeA'];
$timeB = $_POST['timeB'];
$golsA = $_POST['golsTimeA'];
$golsB = $_POST['golsTimeB'];

if (!empty($_POST['timeA']) && isset($_POST['timeA']) 
&& !empty($_POST['timeB']) && isset($_POST['timeB']) 
&& isset($_POST['golsTimeA']) && isset($_POST['golsTimeB'])) {
    if ($golsA > $golsB) {
        echo"O time $timeA ganhou com $golsA gol(s)";
    } else if ($golsA == $golsB) {
        echo"Os times $timeA e $timeB empataram";
    } else {
        echo "O time $timeB ganhou com $golsB gol(s)";
    }
} else {
    echo "Preencha os dados";
    header("refresh:1, form2.php");
}