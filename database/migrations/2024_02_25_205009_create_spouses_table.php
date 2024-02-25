<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->constrained()->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
            $table->string('middle_initial')->nullable();
            $table->string('suffix')->nullable();
            $table->string('ssn')->nullable();
            $table->tinyInteger('parent_claim')->default('0')->nullable();
            $table->tinyInteger('campaign_contribution')->default('0')->nullable();
            $table->tinyInteger('blind')->default('0')->nullable();
            $table->tinyInteger('passed_away')->default('0')->nullable();
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
        Schema::dropIfExists('spouses');
    }
}
