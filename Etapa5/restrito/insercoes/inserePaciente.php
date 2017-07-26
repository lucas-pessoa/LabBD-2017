<?php

include "../../conectabd.php";

$nome = trim($_POST['nome']);
$sobrenome = trim($_POST['email']);
$cep = trim($_POST['cep']);
$rua = trim($_POST['rua']);
$numero = trim($_POST['numero']);
$cidade = trim($_POST['cidade']);
$estado = trim($_POST['estado']);
$cpf = trim($_POST['cpf']);

$sql = mysqli_query($conectabd, "CALL inserePaciente ($cpf, $nome, $sobrenome, $cep, $rua, $numero, $cidade, $estado)");

?>	