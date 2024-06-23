<?php
header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");
 
$empresa [1] = array (
    "nome" => "Birdy",
    "descricao" => "Em Birdy o seu objetivo é acumular o máximo de pontos possíveis, no caso desviando dos canos.",
  
    "imagem" => "imagens/int1.png"
);


echo json_encode($empresa);