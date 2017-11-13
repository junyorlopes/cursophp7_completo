<?php

require_once("config.php");

echo $_SESSION['nome']; 
//apaga os dados contidos na sessão, mas ela não é excluida
session_unset($_SESSION['nome']);
echo $_SESSION['nome']; 

//apaga os dados contidos na sessão e a exclui
session_destroy($_SESSION['nome']);

?>