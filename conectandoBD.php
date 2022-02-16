<?php
//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'conectaBD');
define('USER', 'postgres');
define('PASSWORD', 'Tiraamão');
//Conectando com o Banco de dados
$stringConn = "host=".HOST." dbname=".DBNAME." user=".USER." password=".PASSWORD;
$conn = pg_connect($stringConn) or die( ' Ocorreu um erro e não foi possível conectar ao banco de dados.' );
?>