<?php
/**
 * Author: Enhe <info@wowphp.cn>
 * Date: 2019-02-20
 * Time: 11:00
 */

use Illuminate\Support\Facades\Route;

if (! function_exists('sideBarActive'))
{
    /**
     * @param string $module
     * @return string
     */
    function sideBarActive(string $module) : string
    {
        $route = Route::current()->action;

        return (isset($route['module']) && trim($route['module']) == $module) ? 'sidebar-active' : '';
    }
}
