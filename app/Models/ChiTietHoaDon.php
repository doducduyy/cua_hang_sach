<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    /** @use HasFactory<\Database\Factories\ChiTietHoaDonFactory> */
    use HasFactory;
    protected $table = 'chi_tiet_hoa_dons';
    protected $fillable = ['hoa_don_id', 'sach_id', 'soluong', 'dongia', 'thanhtien'];
    public function hoadon()
    {
        return $this->belongsTo(HoaDon::class, 'hoa_don_id');
    }
    public function sach()
    {
        return $this->belongsTo(Sach::class, 'sach_id');
    }
}
