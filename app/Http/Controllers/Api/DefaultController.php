<?php

namespace App\Http\Controllers\Api;

use App\Services\CommunityService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DefaultController
 * @package App\Http\Controllers\Api
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        return $request->merge([
            'test' => $request->fingerprint()
        ])->all();
    }

    /**
     * 小区选择
     *
     * @param Request $request
     * @return array
     */
    public function communities(Request $request)
    {
        return success(CommunityService::selectItems());
    }
}
