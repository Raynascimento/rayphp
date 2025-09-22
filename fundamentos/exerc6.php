<?php
// "Banco de Dados"
$produtos = [
    [
        "Nome" => "Shampoo",
        "Marca" => "L'Oréal",
        "Preço" => 18.00
    ],
    [
        "Nome" => "Condicionador",
        "Marca" => "L'Oréal",
        "Preço" => 21.50
    ],
    [
        "Nome" => "Creme de Pentear",
        "Marca" => "Salonline",
        "Preço" => 34.50
    ],
    [
        "Nome" => "Leave-in",
        "Marca" => "L'Oréal",
        "Preço" => "14.90"
    ]
];
 

    foreach ($produtos as $produtos){
       echo '
       <div>
       <h2>' . $produtos["Nome"] . '</h2>
       <p style="font-style:italic;">' . $produtos["Marca"] .'</p>
       <p>R$' .$produtos["Preço"] . '</p>
       <button>Comprar</button>
       </div>
       ';
    }








?>