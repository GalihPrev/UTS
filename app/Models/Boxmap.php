<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Foundation\Auth\boxmaps as Authenticatable;
 use Illuminate\Notifications\Notifiable;
 use Illuminate\Database\Eloquent\Model; //Model Eloquent

class Boxmap extends Model
{
    protected $table="boxmaps"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps= false; 
    protected  $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'lng',
        'lat',
        'image',
        'kode_pos',
    ];
};
