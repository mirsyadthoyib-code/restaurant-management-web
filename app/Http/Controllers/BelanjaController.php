<?php

namespace App\Http\Controllers;

use NumberFormatter;
use \App\Models\Bahan;
use App\Models\Belanja;
use App\Models\BelanjaBahan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BelanjaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function show(Belanja $belanja)
    {
        //
        $belanja_list = $belanja->getBelanjaToday();
        
        return view('shopping.list', [
            'title' => 'shopping',
            'belanja' => $belanja_list
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
            'foto_invoice' => 'required|mimes:jpg,png',
        ]);

        $path = $request->file('foto_invoice')->store('shopping','public');

        $belanja->insertBelanja($path, session('user')->id_akun);

        return redirect('/shopping')->with('status', 'Success added shopping!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request, Belanja $belanja, BelanjaBahan $belanja_bahan)
    {
        //
        [$belanja] = $belanja->getBelanjaById($id);
        $belanja_bahan_list = $belanja_bahan->getBelanjaBahanList($id);
        $total = 0;

        foreach ($belanja_bahan_list as $item) {
            $total += $item->kuantitas * $item->harga;
            $item->action = '
            <form action="/shopping/detail/delete" method="POST" >
                <a href="/shopping/detail/edit/'.$item->id_belanja_bahan.'" class="badge badge-primary">
                <i class="ri-edit-line" style="font-size: 1.6em"> </i>
                </a>
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="id" value="'.$item->id_belanja_bahan.'">
                <button type="submit" class="badge badge-secondary" style="border: none;" onclick="return confirmation()"><i class="ri-delete-bin-line" style="font-size: 1.6em" ></i></button>
            </form>
            <script>
            function confirmation(){
                var result = confirm("Are you sure to delete?");
                if(!result){
                    return false;
                }
                return true;
            }
            </script>';
        }

        $fmt = numfmt_create( 'in_ID', NumberFormatter::CURRENCY );
        $total = numfmt_format_currency($fmt, $total, "IDR")."\n";
        
        return view('shopping.form', [
            'title' => 'shopping',
            'belanja' => $belanja,
            'belanja_bahan' => $belanja_bahan_list,
            'total' => $total,
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
    public function update($id, Request $request, Belanja $belanja)
    {
        //
        $request->validate([
            'foto_invoice' => 'required|mimes:jpg,png',
        ]);

        [$belanja_item] = $belanja->getBelanjaById($id);
        Storage::disk('public')->delete($belanja_item->foto_invoice);

        $path = $request->file('foto_invoice')->store('shopping','public');

        $belanja->updateBelanja($id, $path, session('user')->id_akun);

        return redirect('/shopping/edit/'.$id)->with('status', 'Success edited invoice!');
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

    private function compress($source, $destination, $quality)
    {

        $info = getimagesize($source);
    
        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);
    
        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);
    
        imagejpeg($image, $destination, $quality);
    
        return $destination;
    }
}
