<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1552136625StreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('streams', function (Blueprint $table) {
            if(Schema::hasColumn('streams', 'class_rep_id')) {
                $table->dropForeign('275634_5c83b80c2e966');
                $table->dropIndex('275634_5c83b80c2e966');
                $table->dropColumn('class_rep_id');
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
                        
        });

    }
}
