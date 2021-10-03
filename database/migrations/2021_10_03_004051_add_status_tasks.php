<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusTasks extends Migration
{
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('status')->default(0);
        });
    }

    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {

        });
    }
}
