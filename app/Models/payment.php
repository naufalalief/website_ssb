<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_status',
        'file',
        'id_user',
        
    ];
    public function userdetail()
    {
        return $this->belongsTo(UserDetail::class, 'id_user');
    }
    
}
