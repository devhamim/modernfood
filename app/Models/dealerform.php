<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dealerform extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_visitin(){
        return $this->hasMany(visitingarea::class, 'dealerform_id');
    }
}
