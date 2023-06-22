<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    public function authentication($username, $password)
    {
        $data = DB::table('akun')
            ->select('id_akun', 'nama_akun', 'nama_gambar', 'role')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->where('is_active', '=', 1)
            ->get();
        
        if (count($data) == 0) {
            return false;
        }
        return $data;
    }
}
