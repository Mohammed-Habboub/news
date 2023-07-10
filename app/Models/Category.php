<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * create real key in database & use with API
     * protected $appends = ['activity_status'];
     */



    public function getActivityStatusAttribute() {
        return $this->active ? 'Active' : 'In-Active';
    }
}
