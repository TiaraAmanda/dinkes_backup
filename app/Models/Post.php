<?php

namespace App\Models;

use App\Models\Bidang;
// use App\Models\;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $guarded = [];
    protected $table = 'post';
    protected $guarded = ['id'];
    protected $with = ['bidang'];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function bidang(){
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
    public function comments()
    {
    return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

}
