<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AduanController extends Controller
{



    public function index()
    {

        $aduans = Aduan::all();
        return view('Pelapor.index', compact('aduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aduan $aduan)
    {
        $pelapor = $aduan;
        return view('Pelapor.show', compact('pelapor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aduan $aduan)
    {

        // dd($aduan);
        $tanggapan =    $request->validate([
            'tanggapan' => 'required'
        ]);

        $aduan->tanggapan = $tanggapan['tanggapan'];

        $aduan->status = true;

        $aduan->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
