<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sample extends Model
{
    use HasFactory;

    public function meta_sample(){
        return $this->hasMany(meta_sample::class);
    }

}
