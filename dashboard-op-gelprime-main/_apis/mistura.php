<?php

// inclui o arquivo de conexao
include('../settings/conn.php');

header(' charset=Latin1_General_CI_AS');

$sql = "SELECT op
      ,lote
      ,producao
      ,volume
      ,tipo
      ,consumo
      ,mesh
      ,previsto
      ,reprocesso
      ,varredura
      ,pcc_ppro
      ,segregado
      ,total
      ,gemeas
      ,status
      ,perda
      ,lote_ref
      ,op_ref
      ,moinho
      ,finos
      ,po_de_manga
      ,tirar_fino
  FROM [dbo].[VW_DASHBOARD_MISTURA]
  ORDER BY [status] ASC";

$query = $pdo->query($sql);

$row = $query->fetchAll(PDO::FETCH_ASSOC);

$encoded = array_map(function ($value) {
    return mb_convert_encoding($value, 'ISO-8859-1', 'UTF-8');
}, $row);


echo json_encode($encoded);