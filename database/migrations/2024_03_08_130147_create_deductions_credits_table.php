<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions_credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('cash_donations')->nullable();
            $table->string('cash_donations_amount')->nullable();
            $table->string('non_cash_donations')->nullable();
            $table->string('non_cash_donations_amount')->nullable();
            $table->string('donation_carryover')->nullable();
            $table->string('standard_mileage')->nullable();
            $table->string('standard_mileage_amount')->nullable();
            $table->string('non_pocket')->nullable();
            $table->string('health')->nullable();
            $table->string('long_term')->nullable();
            $table->string('doctor')->nullable();
            $table->string('hospital')->nullable();
            $table->string('prescriptions')->nullable();
            $table->string('equipment')->nullable();
            $table->string('travel')->nullable();
            $table->string('other')->nullable();
            $table->string('sales_tax')->nullable();
            $table->string('own_money')->nullable();
            $table->string('pay_tax')->nullable();
            $table->string('other_tax')->nullable();
            $table->string('applied_refund')->nullable();
            $table->string('file_extension')->nullable();
            $table->string('personal_tax')->nullable();
            $table->string('other_deductible_tax')->nullable();
            $table->string('other_deductible_tax_desc')->nullable();
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
        Schema::dropIfExists('deductions_credits');
    }
}
