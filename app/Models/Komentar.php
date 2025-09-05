<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    public function komentars()
{
    return $this->hasMany(Komentar::class);
}
 protected $fillable = ['isi', 'berita_id', 'user_id'];

    public function berita()
    {
        return $this->belongsTo(Berita::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}