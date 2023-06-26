<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produksi extends Model
{
    use HasFactory;

    public function getProduksiToday()
    {
        $data = DB::table('produksi')
            ->select('id_produksi')
            ->where('created', 'LIKE', '%'.today()->format('Y-m-d').'%')
            ->get();
        return $data;
    }

    public function insertProduksi($account_id)
    {
        $status = DB::table('produksi')->insert(
            ['id_akun' => $account_id]
        );
        return $status;
    }
}
