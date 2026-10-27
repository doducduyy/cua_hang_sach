<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietPhieu extends Model
{
    /** @use HasFactory<\Database\Factories\ChiTietPhieuFactory> */
    use HasFactory;
    protected $table = 'chi_tiet_phieus';
    protected $fillable = ['phieu_nhap_id', 'sach_id', 'soluong', 'dongia', 'thanhtien'];
    public function phieunhap()
    {
        return $this->belongsTo(PhieuNhap::class, 'phieu_nhap_id');
    }
    public function sach(){
        return $this->belongsTo(Sach::class, 'sach_id');
    }
}
