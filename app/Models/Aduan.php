<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aduan extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'aduan_id';
    protected $table = 'aduans';


    protected $fillable = [
        'aduan_id',
        'user_id',
        'kategori_id',
        'judul',
        'isi',
        'lampiran',
        'status',
        'tanggapan'
    ];

    public function kategori()
    {
        return $this->hasOne(KategoriAduan::class, 'id', 'kategori_id');
    }
    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
