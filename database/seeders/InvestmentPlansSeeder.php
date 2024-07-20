<?php

namespace Database\Seeders;

use App\Models\InvestmentPlans;
use Illuminate\Cache\RateLimiting\Unlimited;
use Illuminate\Database\Seeder;

class InvestmentPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = InvestmentPlans::create([
            'plan_name' => 'Starter Plan',
            'min_deposit' => 200,
            'max_deposit' => 1999,
            'duration' => 7,
            'daily_earnings' => 1.5,
            'minimum_withdrawal' => 10
        ]);

        $plan2 = InvestmentPlans::create([
            'plan_name' => 'Gold Plan',
            'min_deposit' => 2000,
            'max_deposit' => 9999,
            'duration' => 7,
            'daily_earnings' => 1.8,
            'minimum_withdrawal' => 50
        ]);

        $plan3 = InvestmentPlans::create([
            'plan_name' => 'Advanced Plan',
            'min_deposit' => 10000,
            'max_deposit' => 49999,
            'duration' => 7,
            'daily_earnings' => 2.1,
            'minimum_withdrawal' => 80
        ]);

        $plan4 = InvestmentPlans::create([
            'plan_name' => 'Premium Plan',
            'min_deposit' => 50000,
            'max_deposit' => 99999,
            'duration' => 7,
            'daily_earnings' => 2.6,
            'minimum_withdrawal' => 100
        ]);

        $plan5 = InvestmentPlans::create([
            'plan_name' => 'Exclusive Plan',
            'min_deposit' => 100000,
            'max_deposit' => 499999,
            'duration' => 7,
            'daily_earnings' => 3,
            'minimum_withdrawal' => 120
        ]);

        $plan6 = InvestmentPlans::create([
            'plan_name' => 'VIP Plan',
            'min_deposit' => 500000,
            'max_deposit' => 999999,
            'duration' => 14,
            'daily_earnings' => 3.6,
            'minimum_withdrawal' => 140
        ]);
        $plan7 = InvestmentPlans::create([
            'plan_name' => 'Shares Plan',
            'min_deposit' => 1000000,
            'max_deposit' => 99999999,
            'duration' => 20,
            'daily_earnings' => 4,
            'minimum_withdrawal' => 500
        ]);
    }
}
