<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuNhap extends Model
{
    /** @use HasFactory<\Database\Factories\PhieuNhapFactory> */
    use HasFactory;
    protected $table = 'phieu_nhaps';
    protected $fillable = ['ngay_nhap', 'tong_tien', 'n_c_c_id','user_id'];
    public function ncc()
    {
        return $this->belongsTo(NCC::class, 'n_c_c_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function chitietphieunhaps()
    {
        return $this->hasMany(ChiTietPhieu::class, 'phieu_nhap_id');
    }
}
