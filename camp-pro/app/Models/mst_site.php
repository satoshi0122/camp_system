<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mst_site extends Model
{
    use HasFactory;
    
        // userが親の一対多リレーション
        public function users(){
            return $this->hasMany('User');
        }
}
