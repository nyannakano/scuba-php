<?php

require_once 'view.php';

function crud_create($user){
    $existingdata = file_get_contents(DATA_LOCATION); // Pega os dados existentes do JSON
    $tempArray = json_decode($existingdata); // Transforma o JSON em Array
    $tempArray[] = $user; // Empurra os novos dados para o final da Array
    $data = json_encode($tempArray); // Transforma a Array em JSON novamente
    file_put_contents(DATA_LOCATION, $data); // Salva o json

    header('Location: /?page=login');
}
