<?php

use Illuminate\Database\Seeder;

class StudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'adm_no' => 3836, 'student_name' => 'Mwaniki Jacob', 'parents_name' => 'sammy muthembwa', 'parents_email' => 'mwaniki.jacob@gmail.com', 'parents_phone_no' => 706124690, 'class_name_id' => 1,],

        ];

        foreach ($items as $item) {
            \App\Student::create($item);
        }
    }
}
