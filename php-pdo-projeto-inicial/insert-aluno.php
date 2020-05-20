<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(
    null,
    'Vinicus Dias',
    new \DateTimeImmutable('1997-10-15')
);

$sqlInsert = "INSERT INTO students(NAME,BIRTH_DATE) VALUES('{$student->name()}','{$student->birthDate()->format('Y-m-d')}')";

echo $sqlInsert;

echo 'Execultando no Banco Hein!!!' . PHP_EOL;

var_dump($pdo->exec($sqlInsert));

echo 'EXECULTOUUU!!';
