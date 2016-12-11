<?php

class Task
{
    protected $description;
    protected $completed;

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