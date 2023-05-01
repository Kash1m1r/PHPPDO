<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Gabriel Pereira', new \DateTimeImmutable('1998-11-16'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";
echo $sqlInsert . PHP_EOL;                

var_dump($pdo->exec($sqlInsert));