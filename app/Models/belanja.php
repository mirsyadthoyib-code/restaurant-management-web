<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Belanja extends Model
{
    use HasFactory;
    protected $table = 'belanja_bahan';

    public function getBelanjaBahanList()
    {
        $data = DB::table('belanja_bahan')
            ->select('belanja_bahan.*', 'belanja.foto_invoice', 'bahan.nama_bahan', 'bahan.satuan')
            ->join('belanja', 'belanja_bahan.id_belanja', '=', 'belanja.id_belanja')
            ->join('bahan', 'belanja_bahan.id_bahan', '=', 'bahan.id_bahan')
            ->get();

        return $data;
    }
}
