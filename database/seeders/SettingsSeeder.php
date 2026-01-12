<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function ($user) {
            Settings::create([
                'user_id' => $user->id,
                'theme' => 'dark',
                'lang' => 'fr',
            ]);
        });
    }
}
