<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->enum('q1',['0','1','2','3']);
            $table->enum('q2',['0','1','2','3']);
            $table->enum('q3',['0','1','2','3']);
            $table->enum('q4',['0','1','2','3']);
            $table->enum('q5',['0','1','2','3']);
            $table->enum('q6',['0','1','2','3']);
            $table->enum('q7',['0','1','2','3']);
            $table->enum('q8',['0','1','2','3']);
            $table->enum('q9',['0','1','2','3']);
            $table->enum('q10',['0','1','2','3']);
            $table->enum('q11',['0','1','2','3']);
            $table->enum('q12',['0','1','2','3']);
            $table->enum('q13',['0','1','2','3']);
            $table->enum('q14',['0','1','2','3']);
            $table->integer('total');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('behaviors');
    }
}
