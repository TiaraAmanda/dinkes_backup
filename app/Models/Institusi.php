<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bidang;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institusi extends Model
{
    use HasFactory;

    protected $table = 'institusi';
    protected $guarded = ['id'];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function bidang(){
        return $this->belongsTo(Bidang::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function profil(){
        return $this->belongsTo(Profil::class, 'profil_id');
    }
}
