<?php

if (!isset($_SESSION))
	session_start();

include "conectabd.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = mysqli_query($conectabd, "SELECT * FROM Paciente WHERE cpf='{$cpf}' AND senha='{$senha}'");

$tuplas_check = mysqli_num_rows($sql);

if ($tuplas_check > 0){
	header("Location: restrito/indexPaciente.php");
}else{
	echo "<h2>Login ou senha incorretos</h2><a href='index.html'>Voltar</a>";
}

?>	