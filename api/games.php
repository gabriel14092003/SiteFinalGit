<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1] = array(
    "link" => "https://gamesbyte.000webhostapp.com/construct/flyingchicken/index.html",
    "nome" => "Flying Chicken", 
    "imagem" => "imagens/flyingchicken.png"
);

$jogo[2] = array(
    "link" => "https://gamesbyte.000webhostapp.com/construct/MEOWTOPIA/fase1/index.html",
    "nome" => "MEOWTOPIA", 
    "imagem" => "imagens/meowtopia.png"
);

$jogo[3] = array(
    "link" => "https://gamesbyte.000webhostapp.com/construct/omegacollaps/game/index.html",
    "nome" => "omegacollaps", 
    "imagem" => "imagens/omegacollapse.png"
);

$jogo[4] = array(
    "link" => "https://gamesbyte.000webhostapp.com/construct/CrimsonCurse/index.html",
    "nome" => "Crimsoncurse", 
    "imagem" => "imagens/Crimsoncurse.png"
);

echo json_encode($jogo);
