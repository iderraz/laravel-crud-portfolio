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
            $table->string("description5",100);

            $table->string("ico1",100);
            $table->string("st1",10);
            $table->string("sda",50);

            $table->string("ico2",100);
            $table->string("st2",10);
            $table->string("sdb",50);

            $table->string("ico3",100);
            $table->string("st3",10);
            $table->string("sdc",50);

            $table->string("ico4",100);
            $table->string("st4",10);
            $table->string("sdd",50);

            $table->string("ico5",100);
            $table->string("st5",10);
            $table->string("sde",50);

            $table->string("ico6",100);
            $table->string("st6",10);
            $table->string("sdf",50);
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
