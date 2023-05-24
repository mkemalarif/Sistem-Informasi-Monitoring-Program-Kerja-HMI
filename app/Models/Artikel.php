<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $guarded = ['idArtikel'];

    public function anggota() {
        $this->belongsTo(Anggota::class);
    }
}
