<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string("titre4");
            $table->text("description4");
            $table->string("photo1",100);
            $table->string("photo2",100);
            $table->string("photo3",100);
            $table->string("photo4",100);
            $table->string("photo5",100);
            $table->string("photo6",100);
            $table->string("photo7",100);
            $table->string("photo8",100);
            $table->string("photo9",100);
 
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
        Schema::dropIfExists('portfolios');
    }
}
