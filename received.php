<?php
	
	# DEFININDO EMAIL E SENHAS PADRÕES
	$email = strtolower("email@email.com");
	$senha = strtolower("abc123");

	# RECUPERANDO OS DADOS DO FORMULÁRIO (index.php)
	$novo_email = $_REQUEST["email"];
	$nova_senha = $_REQUEST["senha"];

	# CRIANDO LÓGICA DE LOGIN
	if ($novo_email == $email) {
		if ($nova_senha == $senha) {
			$msg = "ACESSO DEFERIDO";
		}else {
			$msg = "SENHA INCORRETA";
		}
	} else {
		$msg = "NENHUM USUÁRIO ENCONTRADO";
	}

	# RETORNA A MENSAGEM
	echo $msg;

?>