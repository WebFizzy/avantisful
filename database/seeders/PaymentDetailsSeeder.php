<?php

namespace Database\Seeders;

use App\Models\PaymentDetails;
use Illuminate\Database\Seeder;

class PaymentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentDetail1 = PaymentDetails::create([
            'address' => '3CYG4kHEdr1ftnBiLbsszniGfLk8PvzjSm',
            'status' => 1,
            'name' => 'BTC',
            'identifier' => 'btc',
            'path' => 'https://marathn.co/system/wallet/btc_address.jpeg'
        ]);

        $paymentDetail2 = PaymentDetails::create([
            'address' => 'TCPGkAPtSQaHWNbCMR5xfj2UqFNo9pQAq4',
            'status' => 1,
            'name' => 'USDT(Trc20)',
            'identifier' => 'usdt',
            'path' => 'https://marathn.co/system/wallet/usdt_address.jpeg'
        ]);

        $paymentDetail3 = PaymentDetails::create([
            'address' => '0x8F7041385ba243CBD441472FBBeA9B396cBBb914',
            'status' => 1,
            'name' => 'ETH',
            'identifier' => 'eth',
            'path'=> 'https://marathn.co/system/wallet/eth_address.jpeg'
        ]);

        $paymentDetail4 = PaymentDetails::create([
            'address' => '0x2ad9d55befb85c1e8f2512e34d3c36e004fdffe3',
            'status' => 1,
            'name' => 'BNB (bep20)',
            'identifier' => 'pmoney'
        ]);

    }
}
