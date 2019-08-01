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
        $notice = '';
        foreach (Notice::latest()->pluck('title')->toArray() as $index => $item) {
            $notice .= '[' . ($index + 1) . '] ' . $item . '。 ';
        }

        return  $notice;
    }
}
