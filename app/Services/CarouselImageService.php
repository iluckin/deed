<?php


namespace App\Services;


use App\Models\Banner;

/**
 * Class CarouselImageService
 * @package App\Services
 */
class CarouselImageService extends Service
{
    /**
     * @param int $limit
     * @return mixed
     */
    public static function items($limit = 10)
    {
        return Banner::latest()
            ->oldest('top')
            ->whereNotNull('published_at')
            ->get();
    }
}
