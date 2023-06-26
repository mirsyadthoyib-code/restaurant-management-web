<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Belanja extends Model
{
    use HasFactory;

    public function getBelanjaToday()
    {
        $data = DB::table('belanja')
            ->select('id_belanja', 'foto_invoice')
            ->where('created', 'LIKE', '%'.today()->format('Y-m-d').'%')
            ->get();
        return $data;
    }

    public function getBelanjaById($id)
    {
        $data = DB::table('belanja')
            ->select('id_belanja', 'foto_invoice')
            ->where('id_belanja', '=', $id)
            ->get();
        return $data;
    }

    public function insertBelanja($photo_path, $account_id)
    {
        $status = DB::table('belanja')->insert(
            ['foto_invoice' => $photo_path, 'id_akun' => $account_id]
        );
        return $status;
    }

    public function updateBelanja($id, $photo_path, $account_id)
    {
        $affected = DB::table('belanja')
        ->where('id_belanja', $id)
        ->update(['foto_invoice' => $photo_path, 'id_akun' => $account_id]);
        return $affected;
    }
}
