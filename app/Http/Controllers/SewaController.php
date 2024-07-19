<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Penyewa;
use App\Models\Kwitansi;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SewaController extends Controller
{
    public function index()
    {
        $sewa= sewa::latest()->paginate(10);
        return view('sewa.index', compact('sewa'));
    }

    public function create(): View
    {
        return view('sewa.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|integer',
            'kota' => 'string|max:50',
            'id_penyewa' => 'required|exists:penyewa,id',
            'jlh_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|exists:kwitansi,id',
        ]);

        Sewa::create([
            'no_pol'              => $request->no_pol,
            'tgl_sewa'            => $request->tgl_sewa,
            'tgl_selesai'         => $request->tgl_selesai,
            'tlp_tujuan'          => $request->tlp_tujuan,
            'alamat_tujuan'       => $request->alamat_tujuan,
            'biaya_sewa'          => $request->biaya_sewa,
            'kota'                => $request->kota,
            'id_penyewa'          => $request->id_penyewa,
            'jlh_penumpang'       => $request->jlh_penumpang,
            'id_kwitansi'         => $request->id_kwitansi,
        ]);

        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);

        return view('sewa.show', compact('sewa'));
    }

    public function edit( string $id): View
    {
        $sewa = Sewa::findOrfail($id);

        return view('sewa.edit', compact('sewa'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|integer',
            'kota' => 'string|max:50',
            'id_penyewa' => 'required|exists:penyewa,id',
            'jlh_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|exists:kwitansi,id',
        ]);
        $sewa = Sewa::findOrFail($id);
        $sewa->update([
            'no_pol'              => $request->no_pol,
            'tgl_sewa'            => $request->tgl_sewa,
            'tgl_selesai'         => $request->tgl_selesai,
            'tlp_tujuan'          => $request->tlp_tujuan,
            'alamat_tujuan'       => $request->alamat_tujuan,
            'biaya_sewa'          => $request->biaya_sewa,
            'kota'                => $request->kota,
            'id_penyewa'          => $request->id_penyewa,
            'jlh_penumpang'       => $request->jlh_penumpang,
            'id_kwitansi'         => $request->id_kwitansi,
        ]);
        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    public function destroy($id): RedirectResponse
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();
        return redirect()->route('sewa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
