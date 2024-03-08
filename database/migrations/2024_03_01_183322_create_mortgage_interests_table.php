<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMortgageInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mortgage_interests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('refinanced')->nullable();
            $table->string('lender_name')->nullable();
            $table->string('deductible_mortgage')->nullable();
            $table->string('outstanding_mortgage')->nullable();
            $table->date('dob')->nullable();
            $table->string('refund_overpaid')->nullable();
            $table->string('pmi')->nullable();
            $table->string('points_paid')->nullable();
            $table->string('money_used')->nullable();
            $table->string('main_home')->nullable();
            $table->string('estate_tax')->nullable();
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
        Schema::dropIfExists('mortgage_interests');
    }
}
