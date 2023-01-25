<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuffs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'email',
        'phone',
    ];
}
