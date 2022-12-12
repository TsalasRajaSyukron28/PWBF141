<?php

namespace App\Models;

use App\Models\Balita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vitamin extends Model
{
    use HasFactory;
    protected $table = 'vitamin';
    protected $guarded =[
        'id',
        // 'Nama',
        // 'namaVitamin',
        // 'saran',
    ];
    public $timestamps=false;

    public function balita(): BelongsTo
    {
        return $this->belongsTo(Balita::class,  'id_balita');
    }

    // public function balita()
    // {
    // return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
}

