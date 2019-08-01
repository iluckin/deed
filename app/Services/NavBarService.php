<?php

namespace App\Services;

use App\Models\Menu;

/**
 * Class NavBarService
 * @package App\Services
 */
class NavBarService extends Service
{
    /**
     * @param bool $cache
     * @return mixed
     */
    public static function bars($cache = true)
    {
        $bars = Menu::latest()->get()->groupBy('category');
        $items = [];

        foreach ($bars as $cate => $item) {
            $items[] = [
                'name' => $cate,
                'items' => $item
            ];
        }

        return $items;
    }
}
