<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jual extends Model
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

    public function addJual()
    {

        DB::table('jual')->insert([
            'id_akun' => session('user')->id_akun
        ]);
    }

    public function checkJualToday()
    {
        $data = DB::table('jual')
            ->select('nama_akun', 'nama_gambar', 'role')
            ->where('is_active', '=', 1)
            ->get();
        
        if (count($data) == 0) {
            return false;
        }
        return $data;
    }
}
