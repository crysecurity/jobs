<?php

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    private $currency = [
        [
            'name' => 'ruble',
            'code' => 'RUB',
            'symbol' => '₽'
        ],
        [
            'name' => 'dollar',
            'code' => 'USD',
            'symbol' => '$'
        ],
        [
            'name' => 'euro',
            'code' => 'EUR',
            'symbol' => '€'
        ]
    ];

    private function addTimestampToCurrency(): void
    {
        $this->currency = array_map(function ($item) {
            $item[Currency::CREATED_AT] = now();
            $item[Currency::UPDATED_AT] = now();

            return $item;
        }, $this->currency);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->addTimestampToCurrency();

        Currency::insert($this->currency);
    }
}
