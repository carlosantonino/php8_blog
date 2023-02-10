<?php

function saudacao(): string  // O comando aposto os dois pontos define tipo de retorno
{
    $hora = 19;

    if($hora >= 0 && $hora <= 5){
        $saudacao = 'Boa madrugada!!!<br>';
    }

    if($hora >= 6 && $hora <= 12){
        $saudacao = 'Bom dia!!!<br>';
    }

    if($hora >= 13 && $hora <= 18){
        $saudacao = 'Bom tarde!!!<br>';
    }

    if($hora >= 19 && $hora <= 23){
        $saudacao = 'Bom noite!!!<br>';
    }

    return $saudacao;
    
}

function resumirTexto(string $texto, int $limite, $continue = '...'): string
{
    return $texto . " " . $limite;
}

?>