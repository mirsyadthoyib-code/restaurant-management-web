<?php

namespace App\Http\Controllers;

use App\Models\JualMenu;
use App\Models\Menu;
use Illuminate\Http\Request;

class JualMenuController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, Menu $menu)
    {
        //
        $menu_list = $menu->getMenuList();

        return view('selling_detail.form', [
            'title' => 'selling',
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
    public function store($id, Request $request, JualMenu $jual_menu, Menu $menu)
    {
        //
        $request->validate([
            'item' => 'required',
            'qty' => 'required|integer|min:0',
            'leftover' => 'required|integer|min:0|lte:qty',
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');
        $leftover = $request->input('leftover');

        [$menu] = $menu->getMenuById($item);

        $data =  array(
            $id,
            $item,
            $qty,
            $leftover,
            $menu->harga
        );

        $jual_menu->insertJualMenu($data);

        return redirect('/selling')->with('status', 'Success added selling menu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Menu $menu, JualMenu $jual_menu)
    {
        //
        $menu_list = $menu->getMenuList();
        [$jual_menu_item] = $jual_menu->getJualMenuById($id);

        return view('selling_detail.edit', [
            'title' => 'selling',
            'menu' => $menu_list,
            'jual_menu' => $jual_menu_item,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Menu $menu, JualMenu $jual_menu)
    {
        //
        $request->validate([
            'item' => 'required',
            'qty' => 'required|integer|min:0',
            'leftover' => 'required|integer|min:0|lte:qty',
        ]);

        $item = $request->input('item');
        $qty = $request->input('qty');
        $leftover = $request->input('leftover');

        [$menu] = $menu->getMenuById($item);

        $data =  array(
            $id,
            $item,
            $qty,
            $leftover,
            $menu->harga
        );

        $jual_menu->updateJualMenu($data);

        return redirect('/selling')->with('status', 'Success update selling menu!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, JualMenu $jual_menu)
    {
        //
        $id = $request->input('id');
        $jual_menu->deleteJualMenu($id);
        return redirect('/selling')->with('status', 'Success delete selling menu!');
    }
}
