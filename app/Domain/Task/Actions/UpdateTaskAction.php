<?php

namespace Domain\Task\Actions;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Tasks;

class UpdateTaskAction
{
    public static function save(TaskData $taskData, $id): Tasks
    {
        $tasks = Tasks::find($id);
        $tasks->task = $taskData->task;
        $tasks->category = $taskData->category;
        $tasks->save();

        return  $tasks;
    }
}
