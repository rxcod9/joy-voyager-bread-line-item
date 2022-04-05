<?php

namespace Joy\VoyagerBreadLineItem\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'line-items');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'line_items',
                'display_name_singular' => __('joy-voyager-bread-line-item::seeders.data_types.line_item.singular'),
                'display_name_plural'   => __('joy-voyager-bread-line-item::seeders.data_types.line_item.plural'),
                'icon'                  => 'voyager-bread voyager-bread-line-item voyager-anchor',
                'model_name'            => 'Joy\\VoyagerBreadLineItem\\Models\\LineItem',
                // 'policy_name'           => 'Joy\\VoyagerBreadLineItem\\Policies\\LineItemPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadLineItem\\Http\\Controllers\\VoyagerBreadLineItemController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
