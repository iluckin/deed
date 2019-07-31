<?php


namespace App\Services;


use App\Models\Notice;

/**
 * Class NotificationService
 * @package App\Services
 */
class NotificationService extends Service
{
    /**
     * @return string
     */
    public static function titles()
    {
        $items = Notice::latest()->pluck('title')->toArray();

        return implode(' ', $items);
    }
}
