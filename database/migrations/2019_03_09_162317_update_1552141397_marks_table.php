<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1552141397MarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            if(Schema::hasColumn('marks', 'student_name_id')) {
                $table->dropForeign('275645_5c83c7758fca9');
                $table->dropIndex('275645_5c83c7758fca9');
                $table->dropColumn('student_name_id');
            }
            if(Schema::hasColumn('marks', 'subject1_id')) {
                $table->dropForeign('275645_5c83c775af398');
                $table->dropIndex('275645_5c83c775af398');
                $table->dropColumn('subject1_id');
            }
            if(Schema::hasColumn('marks', 'subject2_id')) {
                $table->dropForeign('275645_5c83c775d0425');
                $table->dropIndex('275645_5c83c775d0425');
                $table->dropColumn('subject2_id');
            }
            if(Schema::hasColumn('marks', 'subject3_id')) {
                $table->dropForeign('275645_5c83c775ededc');
                $table->dropIndex('275645_5c83c775ededc');
                $table->dropColumn('subject3_id');
            }
            if(Schema::hasColumn('marks', 'subject4_id')) {
                $table->dropForeign('275645_5c83c7761773b');
                $table->dropIndex('275645_5c83c7761773b');
                $table->dropColumn('subject4_id');
            }
            if(Schema::hasColumn('marks', 'subject5_id')) {
                $table->dropForeign('275645_5c83c77633116');
                $table->dropIndex('275645_5c83c77633116');
                $table->dropColumn('subject5_id');
            }
            if(Schema::hasColumn('marks', 'subject6_id')) {
                $table->dropForeign('275645_5c83c77655cef');
                $table->dropIndex('275645_5c83c77655cef');
                $table->dropColumn('subject6_id');
            }
            if(Schema::hasColumn('marks', 'subject10_id')) {
                $table->dropForeign('275645_5c83c77676c27');
                $table->dropIndex('275645_5c83c77676c27');
                $table->dropColumn('subject10_id');
            }
            if(Schema::hasColumn('marks', 'subject11_id')) {
                $table->dropForeign('275645_5c83c776978ed');
                $table->dropIndex('275645_5c83c776978ed');
                $table->dropColumn('subject11_id');
            }
            if(Schema::hasColumn('marks', 'subject7_id')) {
                $table->dropForeign('275645_5c83c776bb8cc');
                $table->dropIndex('275645_5c83c776bb8cc');
                $table->dropColumn('subject7_id');
            }
            if(Schema::hasColumn('marks', 'subject8_id')) {
                $table->dropForeign('275645_5c83c776dbb0f');
                $table->dropIndex('275645_5c83c776dbb0f');
                $table->dropColumn('subject8_id');
            }
            if(Schema::hasColumn('marks', 'subject9_id')) {
                $table->dropForeign('275645_5c83c77704010');
                $table->dropIndex('275645_5c83c77704010');
                $table->dropColumn('subject9_id');
            }
            if(Schema::hasColumn('marks', 'subject12_id')) {
                $table->dropForeign('275645_5c83c7771f2ab');
                $table->dropIndex('275645_5c83c7771f2ab');
                $table->dropColumn('subject12_id');
            }
            if(Schema::hasColumn('marks', 'subject13_id')) {
                $table->dropForeign('275645_5c83c7773a344');
                $table->dropIndex('275645_5c83c7773a344');
                $table->dropColumn('subject13_id');
            }
            if(Schema::hasColumn('marks', 'subject14_id')) {
                $table->dropForeign('275645_5c83c777594df');
                $table->dropIndex('275645_5c83c777594df');
                $table->dropColumn('subject14_id');
            }
            if(Schema::hasColumn('marks', 'subject15_id')) {
                $table->dropForeign('275645_5c83c77777512');
                $table->dropIndex('275645_5c83c77777512');
                $table->dropColumn('subject15_id');
            }
            
        });
Schema::table('marks', function (Blueprint $table) {
            
if (!Schema::hasColumn('marks', 'mark')) {
                $table->integer('mark')->nullable()->unsigned();
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
        Schema::table('marks', function (Blueprint $table) {
            $table->dropColumn('mark');
            
        });
Schema::table('marks', function (Blueprint $table) {
                        
        });

    }
}
