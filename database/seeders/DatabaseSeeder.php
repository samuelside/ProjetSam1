<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Participant::create([
            'emailParticipant'=>'samuel@gmail.com',
            'passwordParticipant'=>bcrypt('123azerty')
        
        ]);
    }
}
