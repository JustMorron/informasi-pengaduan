<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Complaint;

class Masyarakat extends Model
{
    protected $fillable = ['user_id', 'nik', 'pekerjaan', 'status_pernikahan', 'tanggal_lahir', 'alamat', 'no_hp', 'jenis_kelamin'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
