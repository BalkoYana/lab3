<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $fillable = [
        'code',
        'name',
        'number',
        'branch',
        'address',
        'role'
    ];
    use HasFactory;
}
