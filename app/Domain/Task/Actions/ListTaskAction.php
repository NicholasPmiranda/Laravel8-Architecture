<?php

namespace Domain\Task\Actions;

use Domain\Task\Models\Tasks;

class ListTaskAction
{
    public static  function get():Tasks
    {
      $tasks = Tasks::get();

      return $tasks;
    }
}
