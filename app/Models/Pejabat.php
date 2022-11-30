<?php

namespace App\Models;

use App\Models\ProfilPejabat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pejabat extends Model
{
    use HasFactory;

    protected $table = 'pejabat';
    protected $guarded = ['id'];

    public function profilpejabat(){
        return $this->belongsTo(ProfilPejabat::class);
    }

}
