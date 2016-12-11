<?php

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function enterNightClub($age){
    if($age >= 18){
        return 'You can enter';
    } else {
        return 'You are not old enough!';
    }
}

function connectToDb()
{
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=laravel', 'root', 'root');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}