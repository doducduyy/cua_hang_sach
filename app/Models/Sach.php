<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    /** @use HasFactory<\Database\Factories\SachFactory> */
    use HasFactory;
    protected $table = 'saches';
    protected $fillable = ['ten', 'tacgia', 'nha_xuat_ban', 'gianhap', 'giaban', 'soluong', 'mota', 'vitri', 'img', 'the_loai_id'];
    public function theloai()
    {
        return $this->belongsTo(TheLoai::class, 'the_loai_id');
    }
}
