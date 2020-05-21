<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';


$pdo = $pdo =  \Alura\Pdo\infrastruct\persistence\ConnectionCreator::creatConnection();

$statement = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(pdo::FETCH_ASSOC);

$studentList = [];


foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['ID'],
        $studentData['NAME'],
        new \DateTimeImmutable($studentData['BIRTH_DATE'])
    );
}

var_dump($studentDataList);
