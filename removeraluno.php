<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1 , 6, PDO::PARAM_INT);

$deleteUser = $preparedStatement->execute();

if($deleteUser){
    echo "Aluno deletado";
}
