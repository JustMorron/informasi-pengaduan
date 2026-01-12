<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = ['judul', 'isi_complaint', 'jenis_pengaduan', 'gambar', 'status', 'tanggapan'];

    public function masyarakats()
    {
        return $this->hasMany(Masyarakat::class);
    }
}
