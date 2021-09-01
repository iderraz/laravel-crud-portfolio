<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("titre5",10);
            $table->text("description5");


            $table->text("st1",50);
            $table->text("sda",50);

  
            $table->text("st2",50);
            $table->text("sdb",50);


            $table->text("st3",50);
            $table->text("sdc",50);


            $table->text("st4",50);
            $table->text("sdd",50);


            $table->text("st5",50);
            $table->text("sde",50);

            $table->text("st6",50);
            $table->text("sdf",50);
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
        Schema::dropIfExists('services');
    }
}
