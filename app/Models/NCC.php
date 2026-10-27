<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NCC extends Model
{
    /** @use HasFactory<\Database\Factories\NCCFactory> */
    use HasFactory;
    protected $table = 'n_c_c_s';
    protected $fillable = ['tenncc', 'diachi', 'sdt', 'email'];
    public function phieunhaps()
    {
        return $this->hasMany(PhieuNhap::class, 'n_c_c_id');
    }
}
