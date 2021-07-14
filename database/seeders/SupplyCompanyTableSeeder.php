<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplyCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = [
            [
                'name' => 'VNPT-CA ',
                'logo_url' => 'https://lythigroup.com/vnpt-ca-logo.png',
                'address' => 'VNPT',
            ],
            [
                'name' => 'VIETTEL-CA',
                'logo_url' => 'https://lythigroup.com/vnpt-ca-logo.png',
                'address' => 'VIETTEL-CA',
            ],
            [
                'name' => 'NEW-CA',
                'logo_url' => 'https://lythigroup.com/vnpt-ca-logo.png',
                'address' => 'VNPT',
            ],
            [
                'name' => 'FPT-CA',
                'logo_url' => 'https://lythigroup.com/vnpt-ca-logo.png',
                'address' => 'VNPT',
            ],
        ];
        DB::table('supply_companies')->insert($d);
    }
}
