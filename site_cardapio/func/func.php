<?php

require_once ("variaveis.php");
require_once ("validar.php");

//Validar se o usuário chegou a página via formulário e limpar post
checarEhLimpar($_POST);

//Verifica se a erros no array recebido
mensagensDeErro($dados);

//Exibir os valores contidos no array
echo "<pre>";
var_dump($dados);
echo "</pre>";

//Exibir as mensagens de erro
echo "<pre>";
var_dump($mensagem_erro);
echo "</pre>";
?>