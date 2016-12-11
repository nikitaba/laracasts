<?php

class Task
{
    public $description;
    public $completed;

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