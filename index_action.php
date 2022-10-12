<html>
<head>
<title> Pesquisa Militar - Resultado </title>
<meta charset="utf-8"/>
</head>
<body>
<?php
	include("connection.php");
	$nick = $_GET["nick"];
?>
<div> <img src=https://www.habbo.com.br/habbo-imaging/avatarimage?hb=image&user=<?php echo $nick . "&headonly=1&direction=2&head_direction=3&action=&gesture=sml&size=l");?>/>
</div>
<?php
    //pesquisa
	$sql = "SELECT * FROM militares WHERE nome = '".$nick."'";
	$buscadotreco = mysqli_query($connect, $sql);
	//fazendo as coisa doida
	$batatinha = false;
	while ($registro = mysqli_fetch_array($buscadotreco)) {
		$nickpesquisado = $registro['nome'];
		$patentepesquisado = $registro['patente'];
		$ultimapromopesquisado = $registro['ultimapromo'];
		$statuspesquisado = $registro['st4tus'];
		$batatinha = true;
		echo $nickpesquisado;
		echo '<br>';
		echo "Patente: " . $patentepesquisado;
		echo '<br>';
		echo "Última Promoção: " . $ultimapromopesquisado;
		echo '<br>';
		echo "Status: " . $statuspesquisado;
	}
	if ($batatinha == false) {
	echo '<h2> Usuário inexistente </h2>';
	}
?>	
</body>
</html>