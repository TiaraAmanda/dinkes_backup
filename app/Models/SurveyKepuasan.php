<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyKepuasan extends Model
{
    use HasFactory;

    protected $table = 'survey_kepuasan';
    protected $guarded = ['id'];

    protected $dates = [
    'created_at',
    'updated_at',
    ];
}
