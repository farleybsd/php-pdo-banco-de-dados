<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(pdo::FETCH_ASSOC);
$studentList = [];
//var_dump($statement->fetchAll(pdo::FETCH_CLASS, Student::class)); // as propriedades da clasee igual as colunas do banco

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['ID'],
        $studentData['NAME'],
        new \DateTimeImmutable($studentData['BIRTH_DATE'])
    );
}

var_dump($studentDataList);
