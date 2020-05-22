<?php
$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $caminhoBanco);

echo 'Conectado';

$CREATETABLE = '

    CREATE TABLE IF NOT EXISTS students(ID INTEGER PRIMARY KEY,
        NAME TEXT,
        BIRTH_DATE TEXT
);

    CREATE TABLE IF NOT EXISTS phone(
        ID INTEGER PRIMARY KEY,
        AREA_CODE TEXT,
        NUMBER TEXT,
        STUDENT_ID INTEGER,
        FOREIGN KEY(STUDENT_ID) REFERENCES students(ID)
    );


';
$pdo->exec($CREATETABLE);
