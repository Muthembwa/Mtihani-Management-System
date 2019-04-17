<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83b8a5e3ea2RelationshipsToStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function(Blueprint $table) {
            if (!Schema::hasColumn('students', 'class_name_id')) {
                $table->integer('class_name_id')->unsigned()->nullable();
                $table->foreign('class_name_id', '275633_5c83b8a30e445')->references('id')->on('streams')->onDelete('cascade');
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
        Schema::table('students', function(Blueprint $table) {
            
        });
    }
}
