<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::factory()
            ->times(5000)
            ->create();
    }
}


