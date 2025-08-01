<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    // Izinkan mass assignment untuk kolom 'nama'
    protected $fillable = ['nama'];
}
