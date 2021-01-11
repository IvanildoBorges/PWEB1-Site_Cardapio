<?php

//Limpa o array de dados dentro da funcao limparVetor
//para evitar possíveis scripts
function __e($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

//Limpa o array para ser usado
function limparVetor($varPost) {
    $arrayLimpo = [];
    foreach ($varPost as $indice => $valor) {
        $arrayLimpo[$indice] = __e($valor);
    }
    return $arrayLimpo;
}

// Verifica se o formulário foi enviado
function checarEhLimpar($postArray) {
    global $dados;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Limpar post
        $dados = limparVetor($postArray);
        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}

//Criar mensagem de erro
function mensagensDeErro($postArray) {
    global $mensagem_erro;

    if( 
        ($postArray["numero"] == "") && ($postArray["bairro"] == "") &&
        ($postArray["rua"] == "") && (!isset($postArray["pg"])) &&
        ($postArray["qtd"] == "0")
        ){
        $mensagem_erro["campos_vazios"] = "Preencha os campos!";
    }
    elseif(
        ($postArray["numero"] != "") && ($postArray["bairro"] != "") &&
        ($postArray["rua"] != "") && (isset($postArray["pg"])) &&
        ($postArray["qtd"] != "0")
    ){
        $mensagem_erro["todos_os_campos_preenchidos"] = "Campos preenchidos corretamente!";
    }
    else{
        if($postArray["numero"] == ""){
            $mensagem_erro["numero_vazio"] = "Informe um número!";
        }
        
        if($postArray["bairro"] == ""){
            $mensagem_erro["bairro_vazio"] = "Informe o bairro!";
        }
        
        if($postArray["rua"] == ""){
            $mensagem_erro["rua_vazia"] = "Informe a rua!";
        }
        
        if(!isset($postArray["pg"])){
            $mensagem_erro["pg_vazio"] = "Informe a forma de pagamento!";
        }
        
        if($postArray["qtd"] == "0"){
            $mensagem_erro["qtd_vazio"] = "Informe a quantidade!";
        }
    }
}