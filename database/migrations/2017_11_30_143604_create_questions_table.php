<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('details');
            $table->string('specialist', 100);
            $table->string('file', 100);
            $table->string('Email', 100);
            $table->integer('phone');
            $table->date('dead_line');
            $table->date('dead_line_user');
            $table->integer('researcherCount');
            $table->double('moqPayment');
            $table->double('hourePrice');
            $table->integer('houresCount');
            $table->string('docType', 100);
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
        Schema::dropIfExists('questions');
    }
}
