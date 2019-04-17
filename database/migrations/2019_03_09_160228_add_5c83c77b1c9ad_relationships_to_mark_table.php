<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5c83c77b1c9adRelationshipsToMarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marks', function(Blueprint $table) {
            if (!Schema::hasColumn('marks', 'student_name_id')) {
                $table->integer('student_name_id')->unsigned()->nullable();
                $table->foreign('student_name_id', '275645_5c83c7758fca9')->references('id')->on('students')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject1_id')) {
                $table->integer('subject1_id')->unsigned()->nullable();
                $table->foreign('subject1_id', '275645_5c83c775af398')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject2_id')) {
                $table->integer('subject2_id')->unsigned()->nullable();
                $table->foreign('subject2_id', '275645_5c83c775d0425')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject3_id')) {
                $table->integer('subject3_id')->unsigned()->nullable();
                $table->foreign('subject3_id', '275645_5c83c775ededc')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject4_id')) {
                $table->integer('subject4_id')->unsigned()->nullable();
                $table->foreign('subject4_id', '275645_5c83c7761773b')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject5_id')) {
                $table->integer('subject5_id')->unsigned()->nullable();
                $table->foreign('subject5_id', '275645_5c83c77633116')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject6_id')) {
                $table->integer('subject6_id')->unsigned()->nullable();
                $table->foreign('subject6_id', '275645_5c83c77655cef')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject10_id')) {
                $table->integer('subject10_id')->unsigned()->nullable();
                $table->foreign('subject10_id', '275645_5c83c77676c27')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject11_id')) {
                $table->integer('subject11_id')->unsigned()->nullable();
                $table->foreign('subject11_id', '275645_5c83c776978ed')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject7_id')) {
                $table->integer('subject7_id')->unsigned()->nullable();
                $table->foreign('subject7_id', '275645_5c83c776bb8cc')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject8_id')) {
                $table->integer('subject8_id')->unsigned()->nullable();
                $table->foreign('subject8_id', '275645_5c83c776dbb0f')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject9_id')) {
                $table->integer('subject9_id')->unsigned()->nullable();
                $table->foreign('subject9_id', '275645_5c83c77704010')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject12_id')) {
                $table->integer('subject12_id')->unsigned()->nullable();
                $table->foreign('subject12_id', '275645_5c83c7771f2ab')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject13_id')) {
                $table->integer('subject13_id')->unsigned()->nullable();
                $table->foreign('subject13_id', '275645_5c83c7773a344')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject14_id')) {
                $table->integer('subject14_id')->unsigned()->nullable();
                $table->foreign('subject14_id', '275645_5c83c777594df')->references('id')->on('subjects')->onDelete('cascade');
                }
                if (!Schema::hasColumn('marks', 'subject15_id')) {
                $table->integer('subject15_id')->unsigned()->nullable();
                $table->foreign('subject15_id', '275645_5c83c77777512')->references('id')->on('streams')->onDelete('cascade');
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
