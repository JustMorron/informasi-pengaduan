<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $fillable = ['nik', 'pekerjaan', 'status_pernikahan', 'tanggal_lahir', 'alamat', 'no_hp'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
