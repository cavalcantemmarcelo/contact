<?php 

function boasVindas($nome) {
    return $nome . ". Seja bem vindo!";
}

function media($a, $b){
    $media = ($a + $b) / 2;
    $msg = '';

    if($media < 5) {
        $msg = "reprovado";
    } else {
        $msg = "aprovado";
    }

    return $msg;
}