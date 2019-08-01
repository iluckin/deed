<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\BannerService;
use App\Services\NoticeService;
use App\Http\Controllers\Controller;

/**
 * Class SystemController
 * @package App\Http\Controllers\Api
 */
class SystemController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function init(Request $request)
    {
        return success([
            'menus'     => MenuService::items(),
            'notices'    => NoticeService::getSystemNoticeStrings(),
            'banners'   => BannerService::banners(),
        ]);
    }
}
