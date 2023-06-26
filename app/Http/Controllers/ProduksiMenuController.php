<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\ProduksiMenu;
use Illuminate\Http\Request;

class ProduksiMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Menu $menu)
    {
        //
        $menu_list = $menu->getMenuList();

        return view('production_detail.form', [
            'title' => 'production',
            'menu' => $menu_list,
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request, ProduksiMenu $produksi_menu, Menu $menu)
    {
        //
        $request->validate([
            'item' => 'required',
            'qty' => 'required|integer|min:0'
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');

        [$menu] = $menu->getMenuById($item);

        $data =  array(
            $id,
            $item,
            $qty,
            $menu->harga_modal
        );

        $produksi_menu->insertProduksiMenu($data);

        return redirect('/production')->with('status', 'Success added production menu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProduksiMenu  $produksiMenu
     * @return \Illuminate\Http\Response
     */
    public function show(ProduksiMenu $produksiMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProduksiMenu  $produksiMenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Menu $menu, ProduksiMenu $produksi_menu)
    {
        //
        $menu_list = $menu->getMenuList();
        [$produksi_menu_item] = $produksi_menu->getProduksiMenuById($id);

        return view('production_detail.edit', [
            'title' => 'production',
            'menu' => $menu_list,
            'produksi_menu' => $produksi_menu_item,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProduksiMenu  $produksiMenu
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Menu $menu, ProduksiMenu $produksi_menu)
    {
        //
        $request->validate([
            'item' => 'required',
            'qty' => 'required|integer|min:0',
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');

        [$menu] = $menu->getMenuById($item);

        $data =  array(
            $id,
            $item,
            $qty,
            $menu->harga_modal
        );

        $produksi_menu->updateProduksiMenu($data);

        return redirect('/production')->with('status', 'Success update production menu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProduksiMenu  $produksiMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProduksiMenu $produksi_menu)
    {
        //
        $id = $request->input('id');
        $produksi_menu->deleteProduksiMenu($id);
        return redirect('/production')->with('status', 'Success delete production menu!');
    }
}
