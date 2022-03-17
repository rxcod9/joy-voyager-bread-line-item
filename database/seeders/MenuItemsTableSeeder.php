<?php

namespace Joy\VoyagerBreadLineItem\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $maxOrder = MenuItem::max('order') ?? 1;
    
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-bread-line-item::seeders.menu_items.line_items'),
            'url'     => '',
            'route'   => 'voyager.line-items.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread voyager-bread-line-item',
                'color'      => null,
                'parent_id'  => null,
                'order'      => $maxOrder++,
            ])->save();
        }
    }
}
