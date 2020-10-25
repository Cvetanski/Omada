<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('type_id');
            $table->index('type_id');
            $table->foreign('type_id')
                ->references('id')->on('employee_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('name');
            $table->string('surname');
            $table->string('emb')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
