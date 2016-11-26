<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
teste imagens
<?php
$imagem = array(); // Criamos um array com o nome das imagens.
$imagem[1] = "header_5_.jpg"; // Recheamos este array
$imagem[2] = "header_6_.jpg";
$imagem[3] = "header_7_.jpg";
$contador = count($imagem); // Criamos uma variavel para contar (count();) os dados que estão dentro do array.
$aleatorio = rand(1,$contador); // Esta variável irá gerar um número aleatório (rand();), partindo do 1 até o número de dados que estão dentro do array..
?>
<img src="<?php echo $imagem[$aleatorio]; ?>" width="100%" height="50%"/>


</body>
</html>
