<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProduksiMenu extends Model
{
    use HasFactory;

    public function getProduksiMenuList()
    {
        $data = DB::table('produksi_menu')
            ->select('produksi_menu.*', 'produksi.id_produksi', 'menu.nama_menu')
            ->join('produksi', 'produksi_menu.id_produksi', '=', 'produksi.id_produksi')
            ->join('menu', 'produksi_menu.id_menu', '=', 'menu.id_menu')
            ->get();

        return $data;
    }

    public function getProduksiMenuById($id)
    {
        $data = DB::table('produksi_menu')
            ->select('id_produksi_menu', 'produksi_menu.id_menu', 'kuantitas', 'harga')
            ->join('menu', 'produksi_menu.id_menu', '=', 'menu.id_menu')
            ->where('id_produksi_menu', '=', $id)
            ->get();
        return $data;
    }

    public function getProduksiMenuByIdProduksi($id)
    {
        $data = DB::table('produksi_menu') 
            ->select('id_produksi_menu', 'id_produksi', 'menu.nama_menu', 'kuantitas', 'harga')
            ->join('menu', 'produksi_menu.id_menu', '=', 'menu.id_menu')
            ->where('id_produksi', '=', $id)
            ->get();
        return $data;
    }

    public function insertProduksiMenu($data)
    {
        [$id_produksi, $id_menu, $kuantitas, $harga] = $data;
        $status = DB::table('produksi_menu')->insert([
            'id_produksi' => $id_produksi, 
            'id_menu' => $id_menu,
            'kuantitas' => $kuantitas,
            'harga' => $harga
            ]
        );
        return $status;
    }

    public function updateProduksiMenu($data)
    {
        [$id, $id_menu, $kuantitas, $harga] = $data;
        $affected = DB::table('produksi_menu')
        ->where('id_produksi_menu', $id)
        ->update([
            'id_menu' => $id_menu,
            'kuantitas' => $kuantitas,
            'harga' => $harga
        ]);
        return $affected;
    }

    public function deleteProduksiMenu($id)
    {
        $deleted = DB::table('produksi_menu')->where('id_produksi_menu', '=', $id)->delete();
        return $deleted;
    }
}
