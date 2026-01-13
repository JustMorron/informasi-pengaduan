<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Masyarakat;
use App\Models\Complaint;

class Complaint extends Model
{
    protected $fillable = ['judul', 'isi_complaint', 'jenis_pengaduan', 'gambar', 'status', 'tanggapan'];

    // public function masyarakats()
    // {
    //     return $this->hasMany(Masyarakat::class);
    // }
    public function masyarakat()
    {
        return $this->belongsTo(Masyarakat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
