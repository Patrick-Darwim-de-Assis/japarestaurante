<?php

// conexão com o mysql

$nomeDaPessoa = filter_input(INPUT_POST, 'name');
$QuantidadeDePessoas = filter_input(
	INPUT_POST, 'persons');
$numeroDeTelefone = filter_input(INPUT_POST, 'phone');
$horaDeChegada = filter_input(INPUT_POST, 'hour');
$diaDeChegada = filter_input(INPUT_POST, 'day');

if (!empty($nomeDaPessoa && $QuantidadeDePessoas && $horaDeChegada && $diaDeChegada)){
	if (!empty($numeroDeTelefone)){
		$dbhost = 'localhost';
		$dbuser = 'u893384050_jpRestPatrick';
		$dbpass = 'P_sCNx:^r.@&Gkz8,k2dP3)$]DTE4wC=';
	    $dbname = 'u893384050_jpRestAparecid';
		//$dbname = 'u893384050_jprestpatrick';

		//criar conexão
		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()){
			die ('Erro de conexão na base de dados('.mysqli_connect_errno().')'.mysqli_connect_error());
		}else{
			$sql = "INSERT INTO `rsv_reservarMesa` (`rsv_DiaDaSemana`, `rsv_Hora`, `rsv_NomeCompleto`, `rsv_Telefone`, `rsv_QuantidadeDePessoas`) VALUES ('$diaDeChegada', '$horaDeChegada', '$nomeDaPessoa', '$numeroDeTelefone', '$QuantidadeDePessoas') ";
			if ($conn->query($sql)){
				echo "Novo registro foi inserido com sucesso no banco";
			}else{
				echo "Error: ".$sql."<br>".$conn->error;
			}
			$conn->close();
		}

	}else{
		echo "O número de telefone não deve estar vazio";
		die();
	}
}else{
	echo "Os campos para digitar não devem estar vazios. Favor digitar caso queira prosseguir";
	die();
}

?>