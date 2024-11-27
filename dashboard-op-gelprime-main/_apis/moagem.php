<?php

// inclui o arquivo de conexao
include('../settings/conn.php');

header(' charset=Latin1_General_CI_AS');

$sql = "SELECT op
      ,lote
      ,producao
      ,volume
      ,moinho
      ,tipo
      ,consumo
      ,mesh
      ,previsto
      ,reprocesso
      ,finos
      ,varredura
      ,segregado
      ,po_de_man
      ,total
      ,status
      ,perda
      ,tirar_fino
  FROM [dbo].[VW_DASHBOARD_MOAGEM]
  ORDER BY [status] ASC";


$query = $pdo->query($sql);

$row = $query->fetchAll(PDO::FETCH_ASSOC);

$encoded = array_map(function ($value) {
    return mb_convert_encoding($value, 'ISO-8859-1', 'UTF-8');
}, $row);


echo json_encode($encoded);
