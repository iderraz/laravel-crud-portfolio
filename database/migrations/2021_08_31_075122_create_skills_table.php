<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string("titre3",20);
            $table->text("description3");
            $table->string("log1",100);
            $table->integer("loga");

            $table->string("log2",100);
            $table->integer("logb");

            $table->string("log3",100);
            $table->integer("logc");

            $table->string("log4",100);
            $table->integer("logd");

            $table->string("log5",100);
            $table->integer("loge");

            $table->string("log6",100);
            $table->integer("logf");
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
        Schema::dropIfExists('skills');
    }
}
