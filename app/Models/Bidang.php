<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\ProfilPejabat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    protected $guarded = ['id'];

    public function institusi(){
        return $this->hasMany(Institusi::class);
    }
    public function profilPejabat(){
        return $this->hasMany(ProfilPejabat::class);
    }
    public function ppid(){
        return $this->hasMany(Ppid::class);
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
}
