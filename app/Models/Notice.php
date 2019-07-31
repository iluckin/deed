<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notice
 * @package App\Models
 */
class Notice extends Model
{
    /**
     * @param $query
     */
    public function scopeSystem($query)
    {
        $query->where('type', 0);
    }
}
