<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';


$pdo =  \Alura\Pdo\infrastruct\persistence\ConnectionCreator::creatConnection();

$student = new Student(
    null,
    'Farley De Souza Rudino',
    new \DateTimeImmutable('1992-01-05')
);

$sqlInsert = "INSERT INTO students(NAME,BIRTH_DATE) VALUES(:name,:birth_date);";
$statemnet = $pdo->prepare($sqlInsert);
$statemnet->bindValue(':name', $student->name());
$statemnet->bindValue('birth_date', $student->birthDate()->format('Y-m-d'));

if ($statemnet->execute()) {
    echo 'Aluno incluido';
}
echo $sqlInsert . PHP_EOL;


//var_dump($pdo->exec($sqlInsert));
