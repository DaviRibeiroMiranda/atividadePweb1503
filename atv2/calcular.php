<!DOCKTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>notas</title>
</head>
    <body>
        <?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $n5 = $n1 + $n2 + $n3 + $n4;
    $n6 = $n5 / 4;

    if ($n6 > 5) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }

?>

		</body>
		</html>