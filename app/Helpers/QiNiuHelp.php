<?php
/**
 * Author: Enhe <info@wowphp.cn>
 * Date: 2019-02-20
 * Time: 11:01
 */

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class QiNiuHelp
{
    /**
     * @param UploadedFile $file
     * @param string $directory
     * @param null $oldPath
     * @return bool
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public static function upload(UploadedFile $file, $directory = 'default', $oldPath = null)
    {
        if (! $directory) {
            return false;
        }

        $path = $oldPath ?: implode('/', [self::getDirectory($directory), $file->hashName()]);

        if (!Storage::disk('qiniu')->put($path, $file->get())) {
            return false;
        }

        return Storage::disk('qiniu')->getUrl($path);
    }
    /**
     * @param bool $https
     * @return string
     */
    public static function getDomain($https = true) : string
    {
        return ($https ? 'https://' : 'http://') . config('filesystems.disks.qiniu.domain');
    }

    /**
     * @param string $key
     * @return string
     */
    public static function getDirectory($key = 'default') : string
    {
        $directories = config('filesystems.disks.qiniu.directories', []);

        if (array_key_exists($key, $directories)) {
            return $directories[$key];
        }

        return $directories['default'] ?? 'default';
    }

    /**
     * @param null $directory
     * @return array
     */
    public static function files($directory = null)
    {
        $disk = Storage::disk('qiniu');

        return $disk->allFiles($directory ? self::getDirectory($directory) : null);
    }
}
