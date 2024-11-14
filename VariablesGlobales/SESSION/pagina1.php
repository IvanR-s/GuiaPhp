<?php
session_start();//INICIANDO UNA SESION
$_SESSION["valor1"] = 130;

echo "<a href='pagina2.php'>Ir a la pagina 2</a>";
?>