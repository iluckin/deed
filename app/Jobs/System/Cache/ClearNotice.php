<?php

namespace App\Jobs\System\Cache;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ClearNotice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try
        {
            foreach (config('cache.keys.notice') as $name => $key) {
                Cache::forget($key);
            }
        }

        catch (\Exception $e) {
            info(__METHOD__, [$e->getCode() => $e->getMessage()]);
        }
    }
}
