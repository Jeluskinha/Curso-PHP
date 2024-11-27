<?php
header('Content-Type: application/json');

// Função para gerar status alternado (maioria "INICIADA", alguns "PENDENTE")
function getRandomStatus($index)
{
    $status = ["PENDENTE", "INICIADA"];
    $status_pend = $status[array_rand($status)];

    // Define "PENDENTE" em apenas 4 registros aleatórios, o restante será "INICIADA"
    $pendingIndexes = [26, 27, 28, 29];
    return in_array($index, $pendingIndexes) ? $status_pend : "INICIADA";
}

// Array para armazenar os dados
$data = [];

// Loop para gerar 30 entradas de dados
for ($i = 0; $i < 30; $i++) {
    $data[] = [
        "op" => 1315 + $i,
        "lote" => rand(202404600, 202404700),
        "producao" => round(rand(0, 20000) + rand(0, 9) / 10, 1),
        "volume" => round(rand(0, 20) + rand(0, 9) / 10, 1),
        "tipo" => "NÃO HALAL",
        "consumo" => round(rand(6400, 6800) + rand(0, 9) / 10, 1),
        "mesh" => "06",
        "previsto" => round(rand(6600, 7000) + rand(0, 9) / 10, 1),
        "reprocesso" => round(rand(0, 10) + rand(0, 9) / 10, 1),
        "varredura" => round(rand(0, 10) + rand(0, 9) / 10, 1),
        "pcc_ppro" => round(rand(0, 20) + rand(0, 9) / 10, 1),
        "segregado" => 0.0,
        "total" => round(rand(6000, 7000) + rand(0, 9) / 10, 1),
        "gemeas" => "OP GÊMEAS",
        "status" => getRandomStatus($i),
        "perda" => round(rand(-82000, 0) + rand(0, 9) / 10, 2),
        "lote_ref" => rand(202404630, 202404660),
        "op_ref" => 630 + $i,
        'moinho' => 'MOINHO 01',
        'finos' => round(rand(6000, 7000) + rand(0, 9) / 10, 1),
        'po_de_manga' => '0,0',
        'tirar_fino' => 'SIM'
    ];
}

// Renderizando os dados em formato JSON
echo json_encode($data, JSON_PRETTY_PRINT);