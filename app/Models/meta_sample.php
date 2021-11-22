<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meta_sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
        'sample_id'
    ];

    public function sample(){
        return $this->belongsTo(sample::class);
    }
}
