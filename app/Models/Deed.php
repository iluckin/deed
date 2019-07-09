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
     * @return array
     */
    public static function status()
    {
        return [
            '0' => '新录入',
            '1' => '已补全信息',
            '2' => '正在办理',
            '3' => '待取证',
            '4' => '办理完成',
            '5' => '取消办理',
        ];
    }
}
