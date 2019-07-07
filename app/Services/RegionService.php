<?php

namespace App\Services;

use App\Models\Region;

/**
 * Class RegionService
 * @package App\Services
 */
class RegionService extends Service
{
    /**
     * @return mixed
     */
    public static function provinces()
    {
        return Region::where(['type' => 1])->get(['id', 'name']);
    }

    /**
     * @param int $provinceId
     * @return mixed
     */
    public static function cities(int $provinceId = 1)
    {
        return Region::where(['type' => 2, 'parent_id' => $provinceId])->get(['id', 'name']);
    }

    /**
     * @param int $cityId
     * @return mixed
     */
    public static function towns(int $cityId)
    {
        return Region::where(['type' => 3, 'parent_id' => $cityId])->get(['id', 'name']);
    }
}
