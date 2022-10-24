<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Buku extends Model
{
    use softDeletes;

    protected $table = 'crud_buku2'; 
    protected $fillable = [
        'judul',
        'pengarang',
        'id_lemari',
        'penerbit',
        'isbn',
        'thterbit'
    ];
    protected $hidden;
}
