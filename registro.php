<html>
<head>
<title> Registro Militar </title>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1> Registro Militar </h1>
	<div id="formulario">
	<form method="post" action="registro_action.php">
		Nick: <input type="text" name="nickdapessoa" placeholder="Digite o nick" maxlength="15" required>
		<br><br>
  		Patente: <select id="patentedapessoa1" name="patentedapessoa">
  			  <option value="Soldado" selected>Soldado</option>
  			  <option value="Soldado ★">Soldado ★</option>
  			  <option value="Cabo">Cabo</option>
 			  <option value="Cabo ★">Cabo ★</option>
 			  <option value="Terceiro Sargento">Terceiro Sargento</option>
 			  <option value="Segundo Sargento">Segundo Sargento</option>
 			  <option value="Primeiro Sargento">Primeiro Sargento</option>
 			  <option value="Subtenente">Subtenente</option>
 			  <option value="Cadete">Cadete</option>
 			  <option value="Aspirante-a-Oficial">Aspirante-a-Oficial</option>
 			  <option value="Segundo Tenente">Segundo Tenente</option>
 			  <option value="Primeiro Tenente">Primeiro Tenente</option>
 			  <option value="Capitão">Capitão</option>
 			  <option value="Major">Major</option>
 			  <option value="Tenente-Coronel">Tenente-Coronel</option>
 			  <option value="Coronel ★">Coronel ★</option>
 			  <option value="General-de-Brigada ★★">General-de-Brigada ★★</option>
 			  <option value="General-de-Divisão ★★★">General-de-Divisão ★★★</option>
 			  <option value="General-de-Exército ★★★★">General-de-Exército ★★★★</option>
 			  <option value="Marechal ★★★★★">Marechal ★★★★★</option>
  		</select>
  		<br><br>
  		Status: <select id="statusdapessoa1" name="statusdapessoa" required>
  			  <option value="Ativo" selected>Ativo</option>
  			  <option value="Demitido - Traição">Demitido - Traição</option>
  			  <option value="Demitido - Auto-Demissão">Demitido - Auto-Demissão</option>
 			  <option value="Demitido - Mau Comportamento">Demitido - Mau Comportamento</option>
 			  <option value="Demitido - Sem-Volta">Demitido - Sem-Volta</option>
 			  <option value="Aposentado">Aposentado</option>
  		</select>
  		<br><br>
		<button type="submit"> Inserir </button>
	</form>
	</div>
</body>
</html>