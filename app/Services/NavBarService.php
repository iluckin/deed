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
        return Menu::latest()->get()->groupBy('category');
    }
}
