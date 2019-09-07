<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('class_name');
            $table->string('class_description');
            $table->integer('class_duration');
            $table->string('class_image')->nullable();
            $table->timestamps();
        });
        SChema::table('class',function(Blueprint $table){
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  drop FK di kolom id_user di table class
        SChema::table('class',function(Blueprint $table){
            $table->dropForeign('class_user_id_foreign');
        });
        Schema::dropIfExists('class');
    }
}
