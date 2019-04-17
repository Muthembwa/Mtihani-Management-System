<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83c18d79c4cRelationshipsToSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subjects', function(Blueprint $table) {
            if (!Schema::hasColumn('subjects', 'subject_teacher_id')) {
                $table->integer('subject_teacher_id')->unsigned()->nullable();
                $table->foreign('subject_teacher_id', '275644_5c83c18abd6ac')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('subjects', function(Blueprint $table) {
            
        });
    }
}
