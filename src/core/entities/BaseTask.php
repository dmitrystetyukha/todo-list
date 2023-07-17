<?php

namespace entities;

use DateTime;

abstract class BaseTask
{
    private string $id;
    private DateTime $dueDate;
    private Status $status;
    private string $description;

    abstract function getTaskList(): array;
    abstract function getTask(string $id): BaseTask;
    abstract function createTask(string $id, DateTime $dueDate, string $description);
    abstract function updateTask(string $id, BaseTask $newTask);
    abstract function deleteTask(string $id);
}