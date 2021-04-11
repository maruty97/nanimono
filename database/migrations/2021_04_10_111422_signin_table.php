<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SigninTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('signins', function (Blueprint $signins) {
        
        $signins->bigIncrements('id');
        $signins->string('name');
        $signins->string('mail');
        $signins->integer('age');
        $signins->string('psddword');
        $signins->string('repsddword');
        $signins->timestamps();

        });
    }
    




        //
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signins');
        
    }
}
