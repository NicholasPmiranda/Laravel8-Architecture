<?php

namespace Domain\Task\Actions;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Tasks;

 class CreateTaskAction
{
     public static function save(TaskData $taskData): Tasks
     {
         $tasks = new Tasks;
         $tasks->task = $taskData->task;
         $tasks->category = $taskData->category;
         $tasks->save();

         return $tasks;
     }
}
