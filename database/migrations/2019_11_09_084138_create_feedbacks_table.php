<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('feedarea');
            $table->string('other')->nullable();
            $table->longText('remark');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('landmark');
            $table->string('address');
            $table->string('filename');
            $table->string('verified')->default(0);
            $table->string('status')->default('unsolved');
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
        Schema::dropIfExists('feedbacks');
    }
}
