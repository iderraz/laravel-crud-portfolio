<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("titre1",20);
            $table->string("description1",50);
            $table->string("sous-titre1",50);
            $table->string("sous-description1",20);
            $table->string("birthday",20);
            $table->string("website",20);
            $table->integer("phone");
            $table->string("city",20);
            $table->integer("age");
            $table->string("degree",20);
            $table->string("email",20);
            $table->string("freelance",20);
            $table->string("finale-description",100);
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
        Schema::dropIfExists('abouts');
    }
}
