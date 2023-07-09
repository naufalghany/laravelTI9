<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
    'tanggal',
    'nama_pemesan',
    'alamat_pemesan',
    'no_hp',
    'email',
    'jumlah_pesanan',
    'deskripsi',
    'produk_id',
    ];
        public function produk(){
        return $this->belongsTo(Produk::class);
    }
    public function getAllData(){
        return DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=',
        'produk.id')
        ->select('pesanan.*', 'produk.nama as nama')
        ->get();
    }
}
