<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'image',
        'tahun',
        'no_polisi',
        'tgl_pembelian',
        'status',
        'tgl_terjual',
        'modal',
        'hrg_jual',
        'keuntungan',
        'deskripsi'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
