<?php

// database/seeders/GroupUserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class GroupUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $group = Group::create([
            'name' => 'Family',
        ]);

        $group->users()->attach($user->id);
    }
}
