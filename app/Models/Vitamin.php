<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitamin extends Model
{
    use HasFactory;
    protected $table = 'vitamin';
    protected $fillable = [
        'namaVitamin'
    ];
    public $timestamps=false;


    public function balita()
    {
        return this->belongsToMany(Balita::class, 'balita_vitamin', 'vitamin_id', 'balita_id');
    }

    // public function balita()
    // {
    // return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
}

