<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ProductOrder;
use App\Models\SubscriptionOrder;

class PolymorphicOrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $product = ProductOrder::create([
            'name' => 'Produit A',
            'price' => 50,
        ]);

        $product->order()->create([
            'user_id' => $user->id,
            'amount' => 50,
            'status' => 'paid',
        ]);

        $subscription = SubscriptionOrder::create([
            'name' => 'Abonnement B',
            'price' => 20,
            'duration_months' => 6,
        ]);

        $subscription->order()->create([
            'user_id' => $user->id,
            'amount' => 20,
            'status' => 'paid',
        ]);
    }
}
