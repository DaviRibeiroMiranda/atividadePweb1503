<!DOCKTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>comparador de numeros</title>
</head>
    <body>
        <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
		
	    if ($n2 > $n1) {
    echo "segundo numero é maior.";
} else {
    echo "primeiro numero e maior.";
}
		?>
		</body>
		</html>