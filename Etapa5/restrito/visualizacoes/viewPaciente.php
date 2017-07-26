<?php

include "../../conectabd.php";

$sql = mysqli_query($conectabd, "SELECT * FROM v_paciente");

echo "<table>";

while ($tupla = mysqli_fetch_array($sql)){
	echo "<tr>";

	foreach ($tupla AS $atributo => $valor){
		$$atributo = stripslashes($valor);
		echo "<td>" . $$atributo . "</td>";
	}

	echo "</tr>";
}

echo "</table>";

?>	