<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('resident_type')->nullable();
            $table->string('new_address')->nullable();
            $table->string('political_contribution')->nullable();
            $table->string('identity_theft')->nullable();
            $table->string('made_purchase')->nullable();
            $table->string('use_tax')->nullable();
            $table->string('purchase_total')->nullable();
            $table->string('purchase_sale_tax')->nullable();
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
        Schema::dropIfExists('states');
    }
}
