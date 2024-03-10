<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnemploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unemployments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->constrained()->onDelete('cascade');
            $table->string('received_unemployment')->nullable();
            $table->string('received_other_unemployment')->nullable();
            $table->string('spouse_received_unemployment')->nullable();
            $table->string('spouse_received_other_unemployment')->nullable();
            $table->string('union_unemployment')->nullable();
            $table->string('private_fund_unemployment')->nullable();
            $table->string('state_unemployment_benefit')->nullable();
            $table->string('spouse_union_unemployment')->nullable();
            $table->string('spouse_private_fund_unemployment')->nullable();
            $table->string('spouse_state_unemployment_benefit')->nullable();
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
        Schema::dropIfExists('unemployments');
    }
}
