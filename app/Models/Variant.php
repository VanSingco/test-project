<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'experiment_id',
        'title',
        'weight',
        'is_default'
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }

    public function experiment () {
        return $this->belongsTo(Experiment::class);
    }

    
}
