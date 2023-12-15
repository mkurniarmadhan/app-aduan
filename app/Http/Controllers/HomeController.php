<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {

        $aduans = Aduan::get()->groupBy('kategori.kategori_aduan')->map->count();



        return view('home', compact('aduans'));
    }
}
