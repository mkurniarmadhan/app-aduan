<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriAduan extends Model
{
    use HasFactory;

    protected $table = 'kategori_aduan';
    protected $fillable = [
        'kategori_aduan',
    ];

    public function aduan()
    {
        return $this->belongsTo(Aduan::class, 'id', 'kategori_id');
    }
}
