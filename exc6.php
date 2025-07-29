<?php
$capital = $_GET['capital'];
$taxa = $_GET['taxa'];
$tempo = $_GET['tempo'];
$Juros = $capital * $taxa * $tempo;
echo "O valor do juros simples é de  $Juros%";
?>

