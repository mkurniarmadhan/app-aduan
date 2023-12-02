<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Models\KategoriAduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PelaporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $aduans = Aduan::where('user_id', Auth::id())->get();

        return view('Pelapor.index', compact('aduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = KategoriAduan::all();
        return view('Pelapor.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =    $request->validate([
            'kategori_id' => 'required',
            'judul' => 'required',
            'isi' => 'required',
        ]);

        $data['aduan_id'] = 'adn-' . str()->lower(Str::random(7));
        $data['user_id'] = Auth::id();

        if ($request->file('lampiran')) {
            $file = $request->file('lampiran');
            $destinationPath = 'aduans/';
            $name = $data['aduan_id'] . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['lampiran'] = $name;
        }

        Aduan::create($data);

        return to_route('pelapor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aduan $pelapor)
    {


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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
