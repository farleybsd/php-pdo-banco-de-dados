<?php
$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectado';

$pdo->exec('

    CREATE TABLE students(ID INTEGER PRIMARY KEY,
        NAME TEXT,
        BIRTH_DATE TEXT
);

');
