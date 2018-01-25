<?php
	include("conexao.php");

	session_start();
	$usr = $_POST['usr'];
	$pwd = base64_encode($_POST['pwd']);	
	$contador = 0;
	
	$consulta = "SELECT nome, usr, pwd, admin FROM funcionarios
			 WHERE usr = '".$usr."' AND pwd = '".$pwd."'";
	$resultado = mysqli_query($conexao,$consulta);
	
	while($linha = mysqli_fetch_array($resultado)){
	
	if($usr == $linha['usr']){
	
		$contador++;	
		$_SESSION['usr'] = $usr;		

	
		if($pwd == $linha['pwd']){
		
		$contador++;		

		$_SESSION['pwd'] = $pwd;
		$_SESSION['nome'] = $linha['nome'];
		$_SESSION['admin'] = $linha['admin'];
		
		}
	
	}
	
	}
	
	if($contador == 2){		
		$_SESSION['logado'] = $contador;
		header("Location: index.html");
	} 
	
	if($contador != 2) {
		$_SESSION['logado'] = $contador;	
		header("Location: ../");
		echo $_SESSION['logado'];
	}
	
	mysqli_close($conexao);
	
?>
