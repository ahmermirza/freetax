<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateW2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('spouse_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('ein')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_name')->nullable();
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
        Schema::dropIfExists('w2s');
    }
}
