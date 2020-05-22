<?php

require_once 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

$connection = ConnectionCreator::creatConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
    $astudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1992-05-01')
    );

    $studentRepository->save($astudent);

    $anotherStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeImmutable('1992-05-01')
    );

    $studentRepository->save($anotherStudent);


    $connection->commit();
} catch (RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
