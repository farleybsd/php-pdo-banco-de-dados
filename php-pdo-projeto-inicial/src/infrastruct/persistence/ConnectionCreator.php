<?php

namespace Alura\Pdo\infrastruct\persistence;

use PDO;

class ConnectionCreator
{
    public static function creatConnection(): \PDO
    {
        $databasePath = __DIR__ . '/../../../banco.sqlite';
        return new PDO('sqlite:' . $databasePath);
    }
}
