<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    /** @use HasFactory<\Database\Factories\HoaDonFactory> */
    use HasFactory;
    protected $table = 'hoa_dons';
    protected $fillable = ['ngay_ban', 'phuong_thuc_thanh_toan', 'trangthai', 'tong_tien', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
}
    public function chitiethoadons()
    {
        return $this->hasMany(ChiTietHoaDon::class, 'hoa_don_id');
    }
}
