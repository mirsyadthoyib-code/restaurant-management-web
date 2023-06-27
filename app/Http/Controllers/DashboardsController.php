<?php

namespace App\Http\Controllers;

use NumberFormatter;
use App\Models\JualMenu;
use App\Models\BelanjaBahan;
use Illuminate\Support\Carbon;

class DashboardsController extends Controller
{
    //
    public function show()
    {
        // 
        $jual_menu = new JualMenu();
        $belanja_bahan = new BelanjaBahan();
        $this_year = Carbon::now()->year;
        $this_month = Carbon::now()->month;

        // Before Payday
        if (Carbon::now()->day < '25') $this_month--;
        

        [$total_selling] = $jual_menu->getTotalJualMenuPerMonth($this_month, $this_year);
        [$total_shopping] = $belanja_bahan->getTotalBelanjaBahanPerMonth($this_month, $this_year);

        // Number formatter
        $selling = number_format($total_selling->total);
        $shopping = number_format($total_shopping->total);
        $profit = number_format($total_selling->total - $total_shopping->total);
        
        // print_r(Carbon::now());
        return view('dashboard', [
            'title' => 'dashboard',
            'total_selling' => $selling,
            'total_shopping' => $shopping,
            'total_profit' => $profit
        ]);
    }
}
