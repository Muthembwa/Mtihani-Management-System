<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83cc57b6949RelationshipsToMarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marks', function(Blueprint $table) {
            if (!Schema::hasColumn('marks', 'subject_id')) {
                $table->integer('subject_id')->unsigned()->nullable();
                $table->foreign('subject_id', '275645_5c83cc558113d')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'student_id')) {
                $table->integer('student_id')->unsigned()->nullable();
                $table->foreign('student_id', '275645_5c83cc5595ac6')->references('id')->on('students')->onDelete('cascade');
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
        Schema::table('marks', function(Blueprint $table) {
            
        });
    }
}
