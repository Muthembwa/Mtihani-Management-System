<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83b91a656faRelationshipsToStreamTable extends Migration
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
                if (!Schema::hasColumn('streams', 'class_rep_id')) {
                $table->integer('class_rep_id')->unsigned()->nullable();
                $table->foreign('class_rep_id', '275634_5c83b80c2e966')->references('id')->on('students')->onDelete('cascade');
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
