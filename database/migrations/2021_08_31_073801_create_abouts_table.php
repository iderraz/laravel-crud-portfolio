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
            $table->text("titre1",100);
            $table->text("description1");
            $table->string("sous-titre1",100);
            $table->text("sous-description1",100);
            $table->string("birthday",70);
            $table->string("website",70);
            $table->string("phone");
            $table->string("city",70);
            $table->integer("age");
            $table->string("degree",70);
            $table->string("email",70);
            $table->string("freelance",70);
            $table->text("finale-description");
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
