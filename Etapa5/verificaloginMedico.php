<?php

if (!isset($_SESSION))
	session_start();

include "conectabd.php";

$crm = $_POST['crm'];
$senha = $_POST['senha'];

$sql = mysqli_query($conectabd, "SELECT * FROM Medico WHERE crm='{$crm}' AND senha='{$senha}'");

$tuplas_check = mysqli_num_rows($sql);

if ($tuplas_check > 0){
	header("Location: restrito/indexMedico.php");
}else{
	echo "<h2>Login ou senha incorretos</h2><a href='index.html'>Voltar</a>";
}

?>	