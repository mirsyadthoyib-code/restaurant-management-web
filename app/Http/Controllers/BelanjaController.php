<?php

namespace App\Http\Controllers;

use NumberFormatter;
use App\Models\Belanja;
use \App\Models\Bahan;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopping.list', [
            'title' => 'shopping'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bahan $bahan)
    {
        //
        $bahan_name = $bahan->getBahanList();

        return view('shopping.form', [
            'title' => 'shopping',
            'data' => $bahan_name,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Belanja $belanja)
    {
        //
        $request->validate([
            'item' => 'required',
            'price' => 'required|integer|min:500',
            'qty' => 'required|integer|min:1',
            'foto_invoice' => 'mimes:jpg,png',
        ]);

        $item = $request->input('item');
        $price = $request->input('price');
        $qty = $request->input('qty');
        $foto_invoice = NULL;

        if ($request->hasFile('foto_invoice')) {
            // ...
            $path = $request->file('foto_invoice')->store('public/shopping');
        }

        // echo json_encode(array(
        //     'item' => $item,
        //     'price' => $price,
        //     'qty' => $qty,
        //     'foto_invoice' => $path,
        // ));
        

        return redirect('/shopping')->with('status', 'Success added shopping!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function show(Belanja $belanja)
    {
        //
        $data = $belanja->getBelanjaBahanList();
        $total = 0;

        foreach ($data as $item) {
            $total += $item->kuantitas * $item->harga;
            $item->action = '<a href="/shopping/edit?id='.$item->id_belanja_bahan.'" class="badge badge-primary">
                                <i class="ri-edit-line" style="font-size: 1.6em"> </i>
                             </a>
                             <a href="/shopping/delete?id='.$item->id_belanja_bahan.'" class="badge badge-secondary">
                                <i class="ri-delete-bin-line" style="font-size: 1.6em"> </i>
                             </a>';
        }

        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";
        
        return view('shopping.list', [
            'title' => 'shopping',
            'data' => $data,
            'total' => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit(Belanja $belanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Belanja $belanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Belanja $belanja)
    {
        //
    }
}
