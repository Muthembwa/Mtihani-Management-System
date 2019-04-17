<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(StreamSeed::class);
        $this->call(StudentSeed::class);
        $this->call(SubjectSeed::class);
        $this->call(MarkSeed::class);

    }
}
