<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class produksi extends Model
{
    use HasFactory;
    protected $table = 'produksi_menu';

    public function getProduksiMenuList()
    {
        $data = DB::table('produksi_menu')
            ->select('produksi_menu.*', 'produksi.id_produksi', 'menu.nama_menu')
            ->join('produksi', 'produksi_menu.id_produksi', '=', 'produksi.id_produksi')
            ->join('menu', 'produksi_menu.id_menu', '=', 'menu.id_menu')
            ->get();

        return $data;
    }
}
