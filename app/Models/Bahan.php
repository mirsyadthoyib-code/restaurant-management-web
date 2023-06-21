<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bahan extends Model
{
    use HasFactory;

    public function getBahanList()
    {
        $data = DB::table('bahan')
            ->select('nama_bahan', 'satuan', 'harga')
            ->orderBy('nama_bahan', 'asc')
            ->get();

        return $data;
    }
}
