<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Deed
 * @package App\Models
 */
class Deed extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function community()
    {
        return $this->hasOne(Community::class, 'id', 'community_id');
    }

    /**
     * @param $query
     */
    public function scopeHouse($query)
    {
        $query->whereIn('type', [0, 1]);
    }

    /**
     * @param $query
     */
    public function scopeCar($query)
    {
        $query->where('type', 2);
    }

    /**
     * @return array
     */
    public static function status()
    {
//         0 新录入 1 资料审核 2 税务审核 3 不动产审核 4 办理完成
        return [
            '0' => '新录入',
            '1' => '资料审核',
            '2' => '税务审核',
            '3' => '不动产审核',
            '4' => '办理完成',
            '5' => '取消办理',
        ];
    }
}
