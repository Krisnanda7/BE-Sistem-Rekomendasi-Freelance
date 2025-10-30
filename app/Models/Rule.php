<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rule extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'conditions', 'descriptions'];

    protected $casts = [
        'conditions' => 'array', 
    ];
}
