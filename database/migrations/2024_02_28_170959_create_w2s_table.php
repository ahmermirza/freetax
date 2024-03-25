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
            $table->string('ein')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('emp_foreign_address')->nullable();
            $table->string('emp_address')->nullable();
            $table->string('emp_city')->nullable();
            $table->string('emp_state')->nullable();
            $table->string('emp_zip')->nullable();
            $table->string('federal_wages')->nullable();
            $table->string('federal_income_tax')->nullable();
            $table->string('federal_ss_wages')->nullable();
            $table->string('federal_ss_tax')->nullable();
            $table->string('federal_medicare_wages')->nullable();
            $table->string('federal_medicare_tax')->nullable();
            $table->string('federal_ss_tips')->nullable();
            $table->string('federal_allocated_tips')->nullable();
            $table->string('federal_empty')->nullable();
            $table->string('federal_dependent')->nullable();
            $table->string('federal_nonqualified')->nullable();            
            $table->string('code_1')->nullable();
            $table->string('amount_1')->nullable();
            $table->string('code_2')->nullable();
            $table->string('amount_2')->nullable();
            $table->string('statutory_employee')->nullable();
            $table->string('eetirement_plan')->nullable();
            $table->string('third_party_pay')->nullable();
            $table->string('other_desc')->nullable();
            $table->string('other_amount')->nullable();
            $table->string('employer_state')->nullable();
            $table->string('employer_sin')->nullable();
            $table->string('employer_state_wages')->nullable();
            $table->string('employer_state_income_tax')->nullable();
            $table->string('employer_local_wages')->nullable();
            $table->string('employer_local_income_tax')->nullable();
            $table->string('employer_locality')->nullable();
            $table->string('w2_standard')->nullable();
            $table->string('w2_corrected')->nullable();
            $table->string('clergy_member')->nullable();
            $table->string('contribute')->nullable();
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
