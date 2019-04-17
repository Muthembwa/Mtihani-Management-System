<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'firstName' => null, 'secondName' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$2sqVTe3eP1PyoVtoxyhjOOkG93paNeFMEdwcLzGHrh0k6mbPC8P2u', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'firstName' => null, 'secondName' => 'JMwaniki', 'email' => 'mwaniki.jacob@gmail.com', 'password' => '$2y$10$IrUlq2EAMbwwQd9Vbs7Tr.DJdNVW55wLwKzp2zUGETIRW0RZciczK', 'role_id' => 1, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
