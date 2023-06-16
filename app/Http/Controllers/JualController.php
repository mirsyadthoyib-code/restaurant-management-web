<?php

namespace App\Http\Controllers;

use App\Models\Jual;
use NumberFormatter;
use Illuminate\Http\Request;

class JualController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jual  $jual
     * @return \Illuminate\Http\Response
     */
    public function show(Jual $jual)
    {
        // check selling session
        if(!session('selling')) {
            
        }

        // get jual menu data
        $data = $jual->getJualMenuList();
        $total_qty = 0;
        $total_lo = 0;
        $total = 0;
        
        // calculate total qty, lo and selling
        foreach ($data as $item) {
            $total_qty += $item->kuantitas;
            $total_lo += $item->sisa;
            $total += ($item->kuantitas - $item->sisa) * $item->harga_jual;
        }

        // currency formatter
        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";

        return view('selling.list', [
            'title' => 'selling',
            'data' => $data,
            'total_qty' => $total_qty, 
            'total_lo' => $total_lo,
            'total' => $total
        ]);
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
    public function update(Request $request, Jual $jual)
    {
        //
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
