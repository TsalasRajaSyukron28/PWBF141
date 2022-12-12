<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;
    protected $table = 'balitas';
    protected $fillable = [
        'Id',
        'Nama',
        'Nik',
        'Jeniskelamin',
        'Tanggallahir',
        'Tinggibadan',
        'Beratbadan',
        'Alamat',
        'Namaibu',
        'Tanggal',
    ];

    public function vitamin()
    {
        return this->hasMany(Vitamin::class);
    }

}
