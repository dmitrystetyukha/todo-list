<?php

namespace usecase;

use DateTime;
use entities\BaseTask;

class TaskUseCase
{
    private BaseTask $tasks;
    public function __construct(BaseTask $task)
    {
        $this->tasks = $task;
    }

    public function getTaskList(): array
    {
        return $this->tasks->getTaskList();
    }

    public function getTask(string $id): BaseTask
    {
        return $this->tasks->getTask($id);
    }

    function createTask(string $id, DateTime $dueDate, string $description)
    {
        $this->tasks->createTask($id, $dueDate, $description);
    }
    function updateTask(string $id, BaseTask $newTask)
    {
        $this->tasks->updateTask($id, $newTask);
    }
    function deleteTask(string $id)
    {
        $this->tasks->deleteTask($id);
    }

}