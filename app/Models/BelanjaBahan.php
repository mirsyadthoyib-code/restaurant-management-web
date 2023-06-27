<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BelanjaBahan extends Model
{
    use HasFactory;
    
    public function getBelanjaBahanList($id)
    {
        $data = DB::table('belanja_bahan')
            ->select('belanja_bahan.*', 'bahan.nama_bahan', 'bahan.satuan')
            ->join('belanja', 'belanja_bahan.id_belanja', '=', 'belanja.id_belanja')
            ->join('bahan', 'belanja_bahan.id_bahan', '=', 'bahan.id_bahan')
            ->where('belanja.id_belanja', '=', $id)
            ->get();
        return $data;
    }

    public function getBelanjaBahanById($id)
    {
        $data = DB::table('belanja_bahan')
            ->select('id_belanja', 'belanja_bahan.id_bahan', 'kuantitas', 'harga')
            ->join('bahan', 'belanja_bahan.id_bahan', '=', 'bahan.id_bahan')
            ->where('id_belanja_bahan', '=', $id)
            ->get();
        return $data;
    }

    public function getTotalBelanjaBahanPerMonth($month, $year)
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $year.'-'.$month.'-25');
        $endDate = Carbon::createFromFormat('Y-m-d', $year.'-'.($month+1).'-24');
        
        $data = DB::table('belanja_bahan')
            ->select(DB::raw('sum(kuantitas*harga) as total'))
            ->whereDate('created', '>=', $startDate)
            ->whereDate('created', '<=', $endDate)
            ->get();
        return $data;
    }

    public function insertBelanjaBahan($data)
    {
        [$id_belanja, $id_bahan, $kuantitas, $harga] = $data;
        $status = DB::table('belanja_bahan')->insert([
            'id_belanja' => $id_belanja, 
            'id_bahan' => $id_bahan,
            'kuantitas' => $kuantitas,
            'harga' => $harga
            ]
        );
        return $status;
    }

    public function updateBelanjaBahan($data)
    {
        [$id, $id_bahan, $kuantitas, $harga] = $data;
        $affected = DB::table('belanja_bahan')
        ->where('id_belanja_bahan', $id)
        ->update([
            'id_bahan' => $id_bahan,
            'kuantitas' => $kuantitas,
            'harga' => $harga
        ]);
        return $affected;
    }

    public function deleteBelanjaBahan($id)
    {
        $deleted = DB::table('belanja_bahan')->where('id_belanja_bahan', '=', $id)->delete();
        return $deleted;
    }
}
