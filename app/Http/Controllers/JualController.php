<?php

namespace App\Http\Controllers;

use App\Models\Jual;
use NumberFormatter;
use App\Models\JualMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JualController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function show(Jual $jual, JualMenu $jual_menu)
    {
        $jual_item = $jual->getJualToday();
        if (empty($jual_item[0]->id_jual)) {
            echo $jual->insertJual(session('user')->id_akun);
            $jual_item = $jual->getJualToday();
        }
        [$jual_item] = $jual_item;

        // Get jual menu list
        $jual_menu_list = $jual_menu->getJualMenuList();
        $total_qty = 0;
        $total_lo = 0;
        $total = 0;
        
        // Calculate total qty, lo and selling
        foreach ($jual_menu_list as $item) {
            $total_qty += $item->kuantitas;
            $total_lo += $item->sisa;
            $total += ($item->kuantitas - $item->sisa) * $item->harga;
            $item->action = '
            <form action="/selling/detail/delete" method="POST" >
                <a href="/selling/detail/edit/'.$item->id_jual_menu.'" class="badge badge-primary">
                <i class="ri-edit-line" style="font-size: 1.6em"> </i>
                </a>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="id" value="'.$item->id_jual_menu.'">
                <button type="submit" class="badge badge-secondary" style="border: none;" onclick="confirmation()"><i class="ri-delete-bin-line" style="font-size: 1.6em" ></i></button>
            </form>
            <script>
            function confirmation(){
                var result = confirm("Are you sure to delete?");
                if(result){
                    // Delete logic goes here
                }
            }
            </script>';
        }

        // Currency formatter
        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";

        return view('selling.list', [
            'title' => 'selling',
            'jual' => $jual_item,
            'jual_menu' => $jual_menu_list,
            'total_qty' => $total_qty, 
            'total_lo' => $total_lo,
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
        return view('selling.form', [
            'title' => 'selling'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jual $jual)
    {
        //
        $request->validate([
            'foto_invoice' => 'required|mimes:jpg,png',
        ]);

        $path = $request->file('foto_invoice')->store('selling','public');

        $jual->insertJual($path, session('user')->id_akun);

        return redirect('/selling')->with('status', 'Success added selling!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function edit(Jual $jual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Jual $jual)
    {
        //
        $request->validate([
            'foto_invoice' => 'required|mimes:jpg,png',
        ]);

        [$jual_item] = $jual->getJualToday();

        if ($jual_item->foto_invoice != NULL) {
            Storage::disk('public')->delete($jual_item->foto_invoice);
        }

        $path = $request->file('foto_invoice')->store('selling','public');

        $jual->updateJual($id, $path, session('user')->id_akun);

        return redirect('/selling')->with('status', 'Success edited invoice!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jual $jual)
    {
        //
    }
}
