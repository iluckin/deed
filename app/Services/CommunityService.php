<?php


namespace App\Services;


use App\Models\Community;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

/**
 * Class CommunityService
 * @package App\Services
 */
class CommunityService extends Service
{
    /**
     *
     */
    const CACHE_PREIFX = 'communities:';

    /**
     * @return array|mixed
     */
    public static function selectItems()
    {
//        if ($items = Cache::get($key = static::CACHE_PREIFX . date('Ymd'))) {
//            return $items;
//        }

        if (! $items = Community::get(['id', 'name'])) {
            return [];
        }

//        Cache::put($key, $items, 60 * 60 * 24);

        return $items;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public static function create(Request $request)
    {
        return Community::create(array_filter($request->merge([
            'admin_id' => Auth::user()->id
        ])->all()));
    }
}
