<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1552136203StreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('streams', function (Blueprint $table) {
            if(Schema::hasColumn('streams', 'class_techer')) {
                $table->dropColumn('class_techer');
            }
            if(Schema::hasColumn('streams', 'class_rep')) {
                $table->dropColumn('class_rep');
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
                        $table->string('class_techer')->nullable();
                $table->string('class_rep')->nullable();
                
        });

    }
}
