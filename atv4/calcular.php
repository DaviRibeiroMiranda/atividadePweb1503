<!DOCKTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>Salário</title>
</head>
    <body>
<?php
$n1 = $_POST['n1']; 
$n2 = $_POST['n2']; 

if ($n1 <= 800) {
    $n1 += $n1 * 0.3;
}

if ($n2 > 1) {
    $n1 += ($n2 - 1) * 90;
}

echo "Salário final: R$" . $n1; 
?>



		</body>
		</html>