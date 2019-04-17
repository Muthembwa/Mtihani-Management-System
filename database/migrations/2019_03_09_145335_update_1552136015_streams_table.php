<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1552136015StreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('streams', function (Blueprint $table) {
            if(Schema::hasColumn('streams', 'class_m')) {
                $table->dropColumn('class_m');
            }
            
        });
Schema::table('streams', function (Blueprint $table) {
            
if (!Schema::hasColumn('streams', 'class_name')) {
                $table->string('class_name')->nullable();
                }
if (!Schema::hasColumn('streams', 'class_techer')) {
                $table->string('class_techer')->nullable();
                }
if (!Schema::hasColumn('streams', 'class_rep')) {
                $table->string('class_rep')->nullable();
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
        Schema::table('streams', function (Blueprint $table) {
            $table->dropColumn('class_name');
            $table->dropColumn('class_techer');
            $table->dropColumn('class_rep');
            
        });
Schema::table('streams', function (Blueprint $table) {
                        $table->string('class_m')->nullable();
                
        });

    }
}
