<?php

class Task
{
    protected $description;
    protected $completed;

    public function __construct($description)
    {
        $this->description = $description;
        $this->completed = false;
    }

    public function completeTheTask()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasks[0]->completeTheTask();

require 'index.view.php';
