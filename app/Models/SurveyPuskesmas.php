<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyPuskesmas extends Model
{
    use HasFactory;

    protected $table = 'survey_puskesmas';
    protected $guarded = ['id'];
}
