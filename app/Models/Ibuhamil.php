<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibuhamil extends Model
{
    use HasFactory;
    protected $table = 'ibuhamils';
    protected $fillable = [
        'Id',
        'Nama',
        'Nik',
        'Alamat',
        'Tanggallahir',
        'Tinggibadan',
        'Beratbadan',
        'Tekanandarah',
        'Tanggal',
    ];
}
