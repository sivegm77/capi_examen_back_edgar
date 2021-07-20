<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;

class UserDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDomicilio::factory(300)->create();
    }
}
