<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetTimetableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_timetable', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->timestamps('upload_det_timetable');
            $table->bigInteger('day_timetable_id')->unsigned();
            $table->string('image_det_timetable');
            $table->timestamps();
        });
        
        SChema::table('timetable',function(Blueprint $table){
            $table->foreign('det_timetable_id')
                    ->references('id')
                    ->on('det_timetable')
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
            $table->dropForeign('timetable_det_timetable_id_foreign');
        });
        Schema::dropIfExists('det_timetable');
    }
}
