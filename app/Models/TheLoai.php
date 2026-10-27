<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    /** @use HasFactory<\Database\Factories\TheLoaiFactory> */
    use HasFactory;
    protected $table = 'the_loais';
    protected $fillable = ['ten'];
    public function saches()
    {
        return $this->hasMany(Sach::class, 'the_loai_id');
    }

}
