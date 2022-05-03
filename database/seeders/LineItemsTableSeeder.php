<?php

namespace Joy\VoyagerBreadLineItem\Database\Seeders;

use Joy\VoyagerBreadLineItem\Models\LineItem;
use Illuminate\Database\Seeder;

class LineItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (LineItem::query()->count() > 0) {
            return false;
        }

        $count = 20;
        LineItem::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'LineItem ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'LineItem Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
