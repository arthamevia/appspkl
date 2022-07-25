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
    // membuat relasi one to one
    public function wali()
    {
        // data dari model 'Siswa' bisa memiliki 1 data
        // dari model 'Wali' melalui id_siswa
        return $this->hasOne(Wali::class, 'id_siswa');
    }
}
