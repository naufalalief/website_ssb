<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'namalengkap',
        'ttl',
        'alamat',
        'nohp',
        'akunig',
        'posisibermain',
        'riwayatssb',
        'prestasi',
        'tinggibadan',
        'beratbadan',
        'namaorangtua',
        'pekerjaanorangtua',
        'info',
        'file',
        'status',
        'pesan',
        'id_role',
        
    ];
}
