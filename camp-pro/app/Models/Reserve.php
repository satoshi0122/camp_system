<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserve extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id','site_id','people_num','started','finished','canceled','deleted_at'];

        // userが親の一対多リレーション
        public function users(){
            return $this->hasMany('User');
        }

        public function sites(){
            return $this->hasMany('Site');
        }
}
