<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DefaultController
 * @package App\Http\Controllers\Front
 */
class DefaultController extends Controller
{
    /**
     * 产权查询首页
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Il,luminate\View\View
     */
    public function index(Request $request)
    {
        return view('front.home');
    }
}
