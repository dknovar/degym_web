<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_timetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day_timetable');
            $table->timestamps();
        });
        SChema::table('det_timetable',function(Blueprint $table){
            $table->foreign('day_timetable_id')
                    ->references('id')
                    ->on('day_timetable')
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
        SChema::table('det_timetable',function(Blueprint $table){
            $table->dropForeign('det_timetable_day_timetable_id_foreign');
        });
        Schema::dropIfExists('day_timetable');
    }
}
