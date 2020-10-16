<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;
    /**
     * Menandakan nama tabel yang
     * digunakan oleh model ini
     * 
     * @var string
     */
    protected $table = 'kandidat';
    
    /**
     * Menandakan kolom apa yang
     * dijadikan primary key
     * 
     * @var string 
     */
    protected $primaryKey = 'no_kandidat';

    /**
     * Menandakan apakah kolom
     * primary key bersifat incremental
     * atau tidak
     * 
     * @var boolean
     */
    public $incrementing = false;

    /**
     * Menandakan apakah tabel
     * memiliki kolom timestamps
     * 
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Menandakan kolom apa saja
     * yang dapat diisi pada database
     * 
     * @var array
     */
    protected $fillable = [
        'no_kandidat',
        'nis',
        'jk_kandidat',
        'visi',
        'misi',
        'foto'
    ];

    /**
     * Menandai bahwa tabel kandidat memiliki
     * foreign key relation one to one 
     * terhadap tabel pengguna
     */
    public function pengguna()
    {
        return $this->belongsTo('App\Models\Pengguna','nis');
    }

    /**
     * Menandai bahwa tabel sesi memiliki
     * relation one to one 
     * terhadap tabel jadwal
     */
    public function perolehanSuara1()
    {
        return $this->hasMany('App\Models\PerolehanSuara','no_kandidat_1');
    }

    /**
     * Menandai bahwa tabel sesi memiliki
     * relation one to one 
     * terhadap tabel jadwal
     */
    public function perolehanSuara2()
    {
        return $this->hasMany('App\Models\PerolehanSuara','no_kandidat_2');
    }
}
