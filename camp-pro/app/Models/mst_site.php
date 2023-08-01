<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mst_site extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','people_num_max','created_by'];


    
        // userが親の一対多リレーション
        public function users(){
            return $this->hasMany('User');
        }
}
