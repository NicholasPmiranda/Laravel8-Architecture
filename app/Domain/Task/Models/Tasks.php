<?php
namespace Domain\Task\Models;
use Domain\Task\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = ['task', 'category'];


    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value);
    }
}
