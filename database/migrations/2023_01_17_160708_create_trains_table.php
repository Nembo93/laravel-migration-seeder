<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100); 
            $table->string('start_station', 100);
            $table->string('destination', 100);
            $table->date('trip_date', 100);
            $table->string('leave_hour', 100);
            $table->string('arrival_hour', 100);
            $table->string('train_code', 10);
            $table->unsignedSmallInteger('wagon_number');
            $table->boolean('in_time')->default(1);
            $table->boolean('aborted')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
