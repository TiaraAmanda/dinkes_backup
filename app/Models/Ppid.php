<?php

namespace App\Models;

use App\Models\Bidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ppid extends Model
{
    use HasFactory;

    protected $table = 'ppid';
    protected $guarded = ['id'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function bidang(){
        return $this->belongsTo(Bidang::class);
    }
}
