<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = [
            [
                'name'          => 'Banco De Oro',
                'bank_code'     => 'BDO',
                'account_no'    => '4280019100',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
            [
                'name'          => 'Bank of the Philippine Islands',
                'bank_code'     => 'BPI',
                'account_no'    => '3561022433',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
            [
                'name'          => 'Land Bank of the Philippines',
                'bank_code'     => 'LBP',
                'account_no'    => '1791-0350-03',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
            [
                'name'          => 'Metropolitan Bank and Trust Company',
                'bank_code'     => 'MBT',
                'account_no'    => '173-3-13341095-2',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
            [
                'name'      => 'Philippine National Bank',
                'bank_code' => 'PNB',
                'account_no'    => '143110015780',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
            [
                'name'      => 'Rizal Commercial Banking Corporation',
                'bank_code' => 'RCBC',
                'account_no'    => '0000001974911710',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Savings'
            ],
            [
                'name'      => 'Unionbank',
                'bank_code' => 'UB',
                'account_no'    => '003-070-001-453',
                'account_name'  => 'Lucent Homes',
                'account_type'  => 'PHP Checking'
            ],
        ];

        Bank::insert($bank);
    }
}
