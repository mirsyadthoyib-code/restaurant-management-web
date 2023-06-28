<?php

namespace App\Http\Controllers;

use NumberFormatter;
use \App\Models\Bahan;
use App\Models\Belanja;
use App\Models\BelanjaBahan;
use Illuminate\Http\Request;

class BelanjaBahanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Bahan $bahan)
    {
        //
        $bahan_list = $bahan->getBahanList();

        return view('shopping_detail.form', [
            'title' => 'shopping',
            'bahan' => $bahan_list,
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request, BelanjaBahan $belanja_bahan)
    {
        //
        $request->validate([
            'item' => 'required',
            'price' => 'required|numeric|min:500',
            'qty' => 'required|numeric|min:0.5',
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');
        $price = $request->input('price');

        $data =  array(
            $id,
            $item,
            $qty,
            $price
        );

        $belanja_bahan->insertBelanjaBahan($data);

        return redirect('/shopping/edit/'.$id)->with('status', 'Success added shopping item!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Bahan $bahan, BelanjaBahan $belanja_bahan)
    {
        //
        $bahan_list = $bahan->getBahanList();
        [$belanja_bahan_item] = $belanja_bahan->getBelanjaBahanById($id);

        return view('shopping_detail.edit', [
            'title' => 'shopping',
            'bahan' => $bahan_list,
            'belanja_bahan' => $belanja_bahan_item,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, BelanjaBahan $belanja_bahan)
    {
        //
        $request->validate([
            'item' => 'required',
            'price' => 'required|numeric|min:500',
            'qty' => 'required|numeric|min:0.5',
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');
        $price = $request->input('price');

        [$belanja_bahan_item] = $belanja_bahan->getBelanjaBahanById($id);

        $data =  array(
            $id,
            $item,
            $qty,
            $price
        );

        $belanja_bahan->updateBelanjaBahan($data);

        return redirect('/shopping/edit/'.$belanja_bahan_item->id_belanja)->with('status', 'Success update shopping item!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BelanjaBahan $belanja_bahan)
    {
        //
        $id = $request->input('id');
        [$belanja_bahan_item] = $belanja_bahan->getBelanjaBahanById($id);
        $belanja_bahan->deleteBelanjaBahan($id);
        return redirect('/shopping/edit/'.$belanja_bahan_item->id_belanja)->with('status', 'Success delete shopping item!');
    }
}
