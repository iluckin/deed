<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Community
 * @package App\Models
 */
class Community extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return array
     */
    public static function getBatch()
    {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    }
}
