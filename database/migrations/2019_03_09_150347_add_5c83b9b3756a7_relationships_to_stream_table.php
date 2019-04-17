<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83b9b3756a7RelationshipsToStreamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('streams', function(Blueprint $table) {
            if (!Schema::hasColumn('streams', 'class_teacher_id')) {
                $table->integer('class_teacher_id')->unsigned()->nullable();
                $table->foreign('class_teacher_id', '275634_5c83b80c12915')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('streams', function(Blueprint $table) {
            
        });
    }
}
