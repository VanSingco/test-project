<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tracker_id',
        'enable',
        'title',
        'description',
        'url',
        'ga4_id',
        'type',
        'weight_type'
    ];


    public function variants () {
        return $this->hasMany(Variant::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }




}
