<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Pejabat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilPejabat extends Model
{
    use HasFactory;

    protected $table = 'profil_pejabat';

    protected $guarded = ['id'];

    public function bidang(){
        return $this->belongsTo(Bidang::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function profil(){
        return $this->belongsTo(Profil::class, 'profil_id');
    }
    public function pejabat(){
        return $this->belongsTo(Pejabat::class, 'pejabat_id', 'posisi_jabatan');
    }
}
