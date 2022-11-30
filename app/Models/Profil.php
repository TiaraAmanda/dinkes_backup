<?php

namespace App\Models;

use App\Models\Institusi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';
    protected $guarded = ['id'];

    public function institusi(){
        return $this->belongsTo(Institusi::class);
    }
}
