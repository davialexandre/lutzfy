<?php

echo lutzfy($_POST['texto']);

function lutzfy($texto) {
    $risadas = array(
        'HAUEHAUEAHUEAHUEHAUHEUAHEA',
        'HUEHUEAHEUAEHUHAUEAUH',
        'HEUAHEUAHUEHAUHEUAHEUHAEA',
        'HUAEHUAHEUAHEUAHUEAUHEUAH',
    );
    $palavras = explode(' ', $texto);
    $palavras_lutz = array();
    foreach($palavras as $palavra) {
        $risada = $risadas[rand(0,3)];
        $palavras_lutz[] = str_pad("", strlen($palavra), $risada);
    }

    return implode(' ', $palavras_lutz);
}