<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['gambar', 'judul', 'deskripsi', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function komentars()
    {
        return $this->hasMany(Komentar::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


}
