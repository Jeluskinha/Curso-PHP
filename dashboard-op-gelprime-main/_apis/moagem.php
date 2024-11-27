<?php
header('Content-Type: application/json');

// Função para gerar status alternado (maioria "FINALIZADO", alguns "PENDENTE")
function getRandomStatus($index) {
    $status = ["PENDENTE", "FINALIZADO"];
    $status_pend = $status[array_rand($status)];
    
    // Define "PENDENTE" em apenas 4 registros aleatórios, o restante será "FINALIZADO"
    $pendingIndexes = [26, 27, 28, 29];
    return in_array($index, $pendingIndexes) ? $status_pend : "FINALIZADO";
}

// Array para armazenar os dados
$data = [];

// Loop para gerar 30 entradas de dados
for ($i = 0; $i < 30; $i++) {
    $data[] = [
        "op" => 630 + $i,
        "lote" => rand(202404600, 202404700),
        "producao" => round(rand(6400, 6800) + rand(0, 9) / 10, 1),
        "volume" => rand(7, 8),
        "moinho" => "MOINHO 01",
        "tipo" => "NÃO HALAL",
        "consumo" => round(rand(6600, 6900) + rand(0, 9) / 10, 1),
        "mesh" => "06",
        "previsto" => round(rand(6680, 6790) + rand(0, 9) / 10, 1),
        "reprocesso" => rand(0, 10) * 1.0,
        "finos" => round(rand(120, 180) + rand(0, 9) / 10, 1),
        "varredura" => rand(10, 20) * 1.0,
        "segregado" => 0.0,
        "po_de_man" => 0.0,
        "total" => round(rand(6600, 6900) + rand(0, 9) / 10, 1),
        "status" => getRandomStatus($i),
        "perda" => round(rand(-1, 1) + rand(0, 9) / 10, 2),
        "tirar_fino" => "SIM"
    ];
}

// Renderizando os dados em formato JSON
echo json_encode($data, JSON_PRETTY_PRINT);
