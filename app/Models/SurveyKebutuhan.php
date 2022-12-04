<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKebutuhan extends Model
{
    use HasFactory;

    protected $table = 'kebutuhan_web';
    protected $guarded = ['id'];

    protected $dates = [
    'created_at',
    'updated_at',
    ];
}
