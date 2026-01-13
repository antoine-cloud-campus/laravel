<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        if ($user) {
            $group = Group::firstOrCreate([
                'name' => 'Family',
            ]);

            $user->groups()->attach($group->id);
        }
    }
}
