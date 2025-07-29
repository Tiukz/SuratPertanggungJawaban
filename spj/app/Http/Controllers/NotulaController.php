<?php

namespace App\Http\Controllers;

use App\Models\Notula;
use App\Http\Requests\StoreNotulaRequest;
use App\Http\Requests\UpdateNotulaRequest;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NotulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('notulas.create');
}

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
{
    $validated = $request->validate([
        'rapat' => 'required',
        'tanggal' => 'required|date',
        'waktu_mulai' => 'nullable',
        'waktu_selesai' => 'nullable',
        'surat_undangan' => 'nullable',
        'jabatan_pimpinan' => 'nullable',
        'ketua' => 'nullable',
        'pencatat' => 'nullable',
        'peserta' => 'nullable',
        'acara' => 'nullable',
        'pembahasan' => 'nullable',
        'hasil_diskusi' => 'nullable',
    ]);


    $notula = Notula::create($validated);

    return redirect()->route('notulas.show', $notula->id);
}


    /**
     * Display the specified resource.
     */
    public function show(Notula $notula)
{
    return view('notulas.show', compact('notula'));
}


public function exportPDF($id)
{
    $notula = Notula::findOrFail($id);
    $pdf = Pdf::loadView('notulas.pdf', compact('notula'));
    return $pdf->stream('notula_'.$id.'.pdf');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notula $notula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateNotulaRequest $request, Notula $notula)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notula $notula)
    {
        //
    }
}
