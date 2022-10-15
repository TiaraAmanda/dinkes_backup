<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanMasyarakat extends Model
{
    use HasFactory;

    protected $table = 'laporan_masyarakat';

    protected $guarded = ['id'];


}
