<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKepuasanWeb extends Model
{
    use HasFactory;

    protected $table = 'kepuasan_web';
    protected $guarded = ['id'];

    // protected $dates = [
    // 'created_at',
    // 'updated_at',
    // ];
}
