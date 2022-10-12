<html>
<head>
<title> Registro Militar - Concluído </title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/concluido.css">
</head>
<body>
<div id="container">
<h1> Registrado com sucesso. </h1>
<?php
	//Criar a conexão
	$servidor = "sql104.unaux.com";
    $usuario = "unaux_26450270";
    $senha = "ll5vgf";
    $dbname = "unaux_26450270_dbalistados";
    $connect = new mysqli($servidor, $usuario, $senha, $dbname);

	//Conexão estabelecida, agora vamos pegar as coisas do POST e botar na database
	$nickname = $_POST["nickdapessoa"];
	$patenteregistrada = $_POST["patentedapessoa"];
	$statusregistrado = $_POST["statusdapessoa"];
	$datadodiadehj = date('Y-m-d');

	$query = "INSERT INTO militares (nome, patente, ultimapromo, st4tus) VALUES ('$nickname', '$patenteregistrada', '$datadodiadehj', '$statusregistrado')";

	mysqli_query($connect, $query);


	//mensagem pra falar que registrou

	$nickregistrado = $_POST["nickdapessoa"];
	$patenteregistrado = $_POST["patentedapessoa"];
	echo $nickregistrado . " foi registrado com sucesso como " . $patenteregistrado . " com o status " . $statusregistrado . ".";
?>
<div id="personagem">	
	<img src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=image&user=<?php echo $nickregistrado; ?>&headonly=0&direction=4&head_direction=3&action=wav&gesture=sml&size=m" title="<?php echo $nickregistrado; ?>">
</div>
</div>
</body>
</html>