<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$pdo = $pdo =  \Alura\Pdo\infrastruct\persistence\ConnectionCreator::creatConnection();

$preparestament = $pdo->prepare('DELETE FROM students WHERE ID = ?;');
$preparestament->bindValue(1, 2, PDO::PARAM_INT);

var_dump($preparestament->execute());
