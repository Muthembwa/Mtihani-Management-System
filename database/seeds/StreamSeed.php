<?php

use Illuminate\Database\Seeder;

class StreamSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'class_name' => '1East', 'class_teacher_id' => 2,],
            ['id' => 2, 'class_name' => '1 West', 'class_teacher_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Stream::create($item);
        }
    }
}
