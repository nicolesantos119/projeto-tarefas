<?php
$host    = 'localhost';
$porta   = '5432';
$banco   = 'projeto_tarefas';
$usuario = 'postgres';
$senha   = 'COLOQUE_A_SENHA_AQUI';

$dsn = "pgsql:host=$host;port=$porta;dbname=$banco";

try {
    $pdo = new PDO($dsn, $usuario, $senha, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Erro de conexão: ' . $e->getMessage());
}