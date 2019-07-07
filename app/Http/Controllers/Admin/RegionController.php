<?php

namespace App\Http\Controllers\Admin;

use App\Services\RegionService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class RegionController
 * @package App\Http\Controllers\Admin
 */
class RegionController extends Controller
{
    /**
     * @param Request $request
     * @param int $provinceId
     * @param int $cityId
     * @return \Illuminate\Http\JsonResponse
     */
    public function region(Request $request, int $provinceId = 1, int $cityId = 0)
    {
        if (! $cityId) {
            return success(RegionService::cities($provinceId ?: 1));
        }

        return success(RegionService::towns($cityId));
    }
}
