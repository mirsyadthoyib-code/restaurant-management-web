<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JualMenu extends Model
{
    use HasFactory;

    public function getJualMenuList()
    {
        $data = DB::table('jual_menu')
            ->select('jual_menu.*', 'jual.id_jual', 'menu.nama_menu')
            ->join('jual', 'jual_menu.id_jual', '=', 'jual.id_jual')
            ->join('menu', 'jual_menu.id_menu', '=', 'menu.id_menu')
            ->get();

        return $data;
    }

    public function getJualMenuById($id)
    {
        $data = DB::table('jual_menu')
            ->select('id_jual_menu', 'jual_menu.id_menu', 'kuantitas', 'sisa', 'harga')
            ->join('menu', 'jual_menu.id_menu', '=', 'menu.id_menu')
            ->where('id_jual_menu', '=', $id)
            ->get();
        return $data;
    }

    public function insertJualMenu($data)
    {
        [$id_jual, $id_menu, $kuantitas, $sisa, $harga] = $data;
        $status = DB::table('jual_menu')->insert([
            'id_jual' => $id_jual, 
            'id_menu' => $id_menu,
            'kuantitas' => $kuantitas,
            'sisa' => $sisa,
            'harga' => $harga
            ]
        );
        return $status;
    }

    public function updateJualMenu($data)
    {
        [$id, $id_menu, $kuantitas, $sisa, $harga] = $data;
        $affected = DB::table('jual_menu')
        ->where('id_jual_menu', $id)
        ->update([
            'id_menu' => $id_menu,
            'kuantitas' => $kuantitas,
            'sisa' => $sisa,
            'harga' => $harga
        ]);
        return $affected;
    }

    public function deleteJualMenu($id)
    {
        $deleted = DB::table('jual_menu')->where('id_jual_menu', '=', $id)->delete();
        return $deleted;
    }
}
