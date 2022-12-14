<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->dateTime('date')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('added_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encounters');
    }
}
