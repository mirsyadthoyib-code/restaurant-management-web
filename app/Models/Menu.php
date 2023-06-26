<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    public function getMenuList()
    {
        $data = DB::table('menu')
            ->select('id_menu', 'nama_menu', 'harga_jual', 'harga_modal')
            ->where('is_active', '=', 1)
            ->orderBy('nama_menu', 'asc')
            ->get();

        return $data;
    }

    public function getMenuById($id)
    {
        $data = DB::table('menu')
            ->select('id_menu', 'nama_menu', 'harga_jual', 'harga_modal')
            ->where('id_menu', '=', $id, 'and')
            ->get();

        return $data;
    }
}
