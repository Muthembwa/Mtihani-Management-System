<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Head Teacher',],
            ['id' => 3, 'title' => 'Class Teacher',],
            ['id' => 4, 'title' => 'Subject Teacher',],
            ['id' => 5, 'title' => 'Head Of Exam Department',],
            ['id' => 6, 'title' => 'Data Clerk',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
