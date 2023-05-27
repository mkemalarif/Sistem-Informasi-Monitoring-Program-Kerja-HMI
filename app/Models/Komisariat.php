<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Komisariat extends Model
{
    use HasFactory;
    protected $guarded = ['idKomisariat'];


    public function Anggota()
    {
        $this->hasMany(Anggota::class);
    }
}
