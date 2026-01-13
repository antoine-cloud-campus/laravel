<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\SubscriptionOrder;

class PolymorphicOrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        // ProductOrder + Order
        $product = ProductOrder::create(['name' => 'Produit A', 'price' => 50]);
        $order1 = $product->order()->create([
            'user_id' => $user->id,
            'status' => 'paid',
            'amount' => 50,
        ]);

        // SubscriptionOrder + Order
        $subscription = SubscriptionOrder::create([
            'name' => 'Abonnement B',
            'price' => 20,
            'duration_months' => 6
        ]);
        $order2 = $subscription->order()->create([
            'user_id' => $user->id,
            'status' => 'paid',
            'amount' => 20,
        ]);
    }
}
