<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSecurityBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_security_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('personal_id')->constrained()->onDelete('cascade');
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
            $table->string('received_unemployment')->nullable();
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
        Schema::dropIfExists('social_security_benefits');
    }
}
