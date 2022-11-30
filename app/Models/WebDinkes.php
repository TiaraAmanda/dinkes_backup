<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDinkes extends Model
{
    use HasFactory;

    protected $table = 'webdinkes_kabkota';
    protected $guarded = ['id'];
}
