<?php

namespace Domain\Task\Actions;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Tasks;

class DeleteTaskAction
{
    public static function save($id): Tasks
    {
        $tasks = Tasks::find($id);
        $tasks->delete();

        return  $tasks;
    }
}
