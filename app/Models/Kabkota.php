<?php

namespace App\Models;

use App\Models\Spm;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kabkota extends Model
{
    use HasFactory;

    protected $table = 'kabkota';
    protected $guarded = ['id'];

    public function spm(){
        return $this->hasMany(Spm::class);
    }
}
