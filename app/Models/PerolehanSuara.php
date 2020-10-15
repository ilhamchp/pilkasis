<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerolehanSuara extends Model
{
    use HasFactory;
    /**
     * Menandakan nama tabel yang
     * digunakan oleh model ini
     * 
     * @var string
     */
    protected $table = 'perolehan_suara';
    
    /**
     * Menandakan kolom apa yang
     * dijadikan primary key
     * 
     * @var string 
     */
    protected $primaryKey = 'nis_pemilih';

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
        'nis_pemilih',
        'no_kandidat_1',
        'no_kandidat_2'
    ];

    /**
     * Menandai bahwa tabel perolehan suara memiliki
     * foreign key relation one to one 
     * terhadap tabel pengguna
     */
    public function pengguna()
    {
        return $this->belongsTo('App\Models\Pengguna','nis_pemilih');
    }
}
