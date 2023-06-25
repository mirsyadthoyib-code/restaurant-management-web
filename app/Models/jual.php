<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jual extends Model
{
    use HasFactory;

    public function getJualToday()
    {
        $data = DB::table('jual')
            ->select('id_jual', 'foto_invoice')
            ->where('created', 'LIKE', '%'.today()->format('Y-m-d').'%')
            ->get();
        return $data;
    }

    public function insertJual($account_id)
    {
        $status = DB::table('jual')->insert(
            ['foto_invoice' => null, 'id_akun' => $account_id]
        );
        return $status;
    }

    public function updateJual($id, $photo_path, $account_id)
    {
        $affected = DB::table('jual')
        ->where('id_jual', $id)
        ->update(['foto_invoice' => $photo_path, 'id_akun' => $account_id]);
        return $affected;
    }
}
