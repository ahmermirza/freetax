<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1099gsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1099gs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->constrained()->onDelete('cascade');
            $table->string('belongs_to')->nullable();
            $table->string('payer_name')->nullable();
            $table->string('unemployment_compensation')->nullable();
            $table->string('federal_income_tax')->nullable();
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
        Schema::dropIfExists('form1099gs');
    }
}
