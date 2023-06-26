<?php

namespace App\Http\Controllers;

use NumberFormatter;
use App\Models\Produksi;
use App\Models\ProduksiMenu;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function show(Produksi $produksi, ProduksiMenu $produksi_menu)
    {
        //
        $produksi_item = $produksi->getProduksiToday();
        if (empty($produksi_item[0]->id_produksi)) {
            echo $produksi->insertProduksi(session('user')->id_akun);
            $produksi_item = $produksi->getProduksiToday();
        }
        [$produksi_item] = $produksi_item;

        $produksi_menu_list = $produksi_menu->getProduksiMenuByIdProduksi($produksi_item->id_produksi);
        $total_qty = 0;
        $total = 0;
        foreach ($produksi_menu_list as $item) {
            $total_qty += $item->kuantitas;
            $total += $item->kuantitas * $item->harga;
            $item->action = '
            <form action="/production/detail/delete" method="POST" >
                <a href="/production/detail/edit/'.$item->id_produksi_menu.'" class="badge badge-primary">
                <i class="ri-edit-line" style="font-size: 1.6em"> </i>
                </a>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="id" value="'.$item->id_produksi_menu.'">
                <button type="submit" class="badge badge-secondary" style="border: none;" onclick="return confirmation()"><i class="ri-delete-bin-line" style="font-size: 1.6em" ></i></button>
            </form>
            <script>
            function confirmation(){
                let result = confirm("Are you sure to delete?");
                if(!result){
                    return false;
                }
                return true;
            }
            </script>';
        }
        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";
        return view('production.list', [
            'title' => 'production',
            'produksi' => $produksi_item,
            'produksi_menu' => $produksi_menu_list,
            'total_qty' => $total_qty,
            'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('production.form', [
            'title' => 'production'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Produksi $produksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produksi $produksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produksi  $produksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produksi $produksi)
    {
        //
    }
}
