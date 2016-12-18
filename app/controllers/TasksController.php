<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');
        return view('tasks', ['tasks' => $tasks]);
    }

    public function store()
    {
        App::get('database')->insert('todos', [
            'description' => $_POST['description'],
            'completed' => $_POST['completed']
        ]);

        return redirect('tasks');
    }
}