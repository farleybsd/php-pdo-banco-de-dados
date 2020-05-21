<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparestament = $pdo->prepare('DELETE FROM students WHERE ID = ?;');
$preparestament->bindValue(1, 2, PDO::PARAM_INT);

var_dump($preparestament->execute());
