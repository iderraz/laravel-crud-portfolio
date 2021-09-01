<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string("titre2");
            $table->text("description2");
            $table->integer("nombre1");
            $table->text("descriptiona");
            $table->integer("nombre2");
            $table->text("descriptionb");
            $table->integer("nombre3");
            $table->text("descriptionc");
            $table->integer("nombre4");
            $table->text("descriptiond");
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
        Schema::dropIfExists('facts');
    }
}
