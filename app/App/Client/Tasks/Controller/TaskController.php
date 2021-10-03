<?php

namespace App\Client\Tasks\Controller;

use App\Client\Tasks\Request\TaskRequest;
use App\Core\Http\Controllers\Controller;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\Actions\DeleteTaskAction;
use Domain\Task\Actions\UpdateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Tasks;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function index():JsonResponse
    {
        $tasks = Tasks::get();

        return response()->json($tasks);
    }

    public function store(TaskRequest $request):JsonResponse
    {
      $data = TaskData::fromRequest($request);
      CreateTaskAction::save($data);

      return response()->json('success');

    }

    public function update(TaskRequest $request, Tasks $id):JsonResponse
    {
        $data = TaskData::fromRequest($request);
        UpdateTaskAction::save($data, $id);


        return response()->json('success');
    }

    public function delete(Tasks $id):JsonResponse
    {
        DeleteTaskAction::save($id);

        return response()->json('success');
    }
}
