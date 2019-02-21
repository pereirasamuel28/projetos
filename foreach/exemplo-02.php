

<form>
	<input type="name" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">
</form>


<?php

//POR PADRAO QUANDO NAO TEM METOD NO IMPUT, PROPRIA PAGINA, QUANDO NAO TEM O POST, PADRAO FICA O GET

foreach ($_GET as $key => $value) {
	
	echo "Nome do campo: " . $key . "<br>";
	echo "Valor do campo: " . $value . "<br>";
	echo "<hr>";
}

?>