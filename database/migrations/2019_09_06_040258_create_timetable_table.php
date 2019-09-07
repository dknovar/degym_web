<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('det_timetable_id')->unsigned();
            $table->date('timetable_month');
            $table->year('timetable_year');
            $table->timestamps();
        });
        SChema::table('timetable',function(Blueprint $table){
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
        SChema::table('timetable',function(Blueprint $table){
            $table->dropForeign('timetable_user_id_foreign');
        });
        
        Schema::dropIfExists('timetable');
    }
}
