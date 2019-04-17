<?php

use Illuminate\Database\Seeder;

class SubjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'subject_code' => 101, 'subjectname' => 'Mathematics', 'subject_teacher_id' => 2,],
            ['id' => 2, 'subject_code' => 102, 'subjectname' => 'Kiswahili', 'subject_teacher_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Subject::create($item);
        }
    }
}
