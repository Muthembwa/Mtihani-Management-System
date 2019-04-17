<?php

use Illuminate\Database\Seeder;

class MarkSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'subject_id' => null, 'student_id' => null, 'mark' => null,],
            ['id' => 2, 'subject_id' => 1, 'student_id' => 1, 'mark' => 34,],

        ];

        foreach ($items as $item) {
            \App\Mark::create($item);
        }
    }
}
