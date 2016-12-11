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