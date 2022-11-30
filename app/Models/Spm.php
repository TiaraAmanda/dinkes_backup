<?php

namespace App\Models;

use App\Models\Kabkota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spm extends Model
{
    use HasFactory;

    protected $table = 'spm_file';
    protected $guarded = ['id'];

    public function kabkota(){
        return $this->belongsTo(Kabkota::class ,'kd_kabkota');
    }
}
