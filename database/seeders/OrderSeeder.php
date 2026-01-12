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

        if ($user) {
            Order::create([
                'user_id' => $user->id,
                'amount' => 50,
                'status' => 'paid',
            ]);
        }
    }
}

