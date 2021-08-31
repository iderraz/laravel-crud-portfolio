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
            $table->string("titre2",20);
            $table->string("description2",50);
            $table->string("icone1",100);
            $table->integer("nombre1");
            $table->string("sous-descriptiona",20);
            $table->string("icone2",100);
            $table->integer("nombre2");
            $table->string("sous-descriptionb",20);
            $table->string("icone3",100);
            $table->integer("nombre3");
            $table->string("sous-descriptionc",20);
            $table->string("icone4",100);
            $table->integer("nombre4");
            $table->string("sous-descriptiond",20);
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
