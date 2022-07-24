<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    //field apa saja yang bisa diisi
    
    public $fillable = ['nis', 'nama', 'alamat', 'tgl_lahir'];
    //membuat fitur created_at(kapan data dibuat) & updated_at(kapan data diedit)
    //aktif
    public $timestamps = true;
}
