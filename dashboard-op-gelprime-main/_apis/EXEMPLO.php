<?php

// inclui o arquivo de conexao
include('../settings/conn.php');

// executa a consulta no banco de dados
$query = $pdo->query("SELECT * FROM tbClassifAnimal");

// faz um loop e imprime os dados em tela
while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	echo $row['Desc_classif']."<br/>";
}


/* SQL's

// ---------------    mistura

SELECT op
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
  ORDER BY [status] ASC

// ---------------    moagem 

SELECT op
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
  ORDER BY [status] ASC

*/