<?php

namespace Alura\Pdo\Domain\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\infrastruct\persistence\ConnectionCreator;

class PdoStudentRepository implements StudentRepository
{

    private \PDO $conection;

    public function __construct()
    {
        $this->conection = ConnectionCreator::creatConnection();
    }

    public function allStudents(): array
    {
    }
    public function studentBirthAt(\DateTimeInterface $birthdate): array
    {
    }
    public function save(Student $student): bool
    {
    }
    public function remove(Student $student): bool
    {
    }
}
