<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'test@example.com')->first();

        $user->orders()->create([
            'amount' => 50,
            'status' => 'paid',
        ]);
    }
}
