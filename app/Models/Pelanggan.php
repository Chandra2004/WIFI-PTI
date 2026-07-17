<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Pelanggan extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pelanggan';
    protected $primaryKey = 'id_pelanggan';
    public $timestamps = false;

    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'no_hp',
        'email',
        'password',
        'id_paket',
        'tanggal_daftar',
        'status_aktif',
    ];

    protected $hidden = ['password'];

    // ✅ PERBAIKI: Sesuaikan cast dengan data sebenarnya
    protected $casts = [
        'status_aktif' => 'string', // Karena di database berupa 'Aktif'/'Nonaktif'
        'tanggal_daftar' => 'datetime',
    ];

    // ✅ AUTO HASH PASSWORD
    public function setPasswordAttribute($value)
    {
        if (!Str::startsWith($value, '$2y$')) { // Cek apakah password sudah di-hash
            $this->attributes['password'] = Hash::make($value);
        } 
        $this->attributes['password'] = Hash::make($value);
    }

    public function paket()
    {
        return $this->belongsTo(PaketInternet::class, 'id_paket');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_pelanggan');
    }
}