<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'f_name' => 'Patrick',
            // 'l_name' => 'Star',
            // 'p_number' => '12345678',
            'username' => 'patrickstar',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => false,
            'referral_key' => 1234,
            'status' => 'Active',
            'referred_by' => 2345,
            'can_withdraw' => true,
            'kyc_status' => 'Unverified',
            'country' => 'Nigeria'
        ]);

        $user1->attachRole('user');

        $admin = User::create([
            'f_name' => 'admin',
            // 'l_name' => 'Neutron',
            // 'p_number' => '08161845438',
            'username' => 'admin',
            'email' => 'invest@avantiswealthltd.com',
            'password' => Hash::make('50012397'),
            'is_admin' => true,
            'referral_key' => 2345,
            'status' => 'Active',
            'can_withdraw' => true,
            'kyc_status' => 'Unverified',
            'country' => 'Scotland'
        ]);

        $admin->attachRole('admin');
    }
}
