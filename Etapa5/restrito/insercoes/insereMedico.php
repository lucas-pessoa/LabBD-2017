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
$crm = trim($_POST['crm']);
$especialidade = trim($_POST['especialidade']);
$email = trim($_POST['email']);
$pagina = trim($_POST['pagina']);

$sql = mysqli_query($conectabd, "CALL insertMedico ($cpf, $nome, $sobrenome, $cep, $rua, $numero, $cidade, $estado, $crm, $especialidade, $email, $pagina)");

?>	