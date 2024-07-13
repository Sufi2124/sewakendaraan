<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Kendaraan;
use App\Models\Penyewa;
use App\Models\Kwitansi;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    public function index(): View
    {
        $invoices = DB::table('invoice')
            ->join('kwitansi', 'kwitansi.id', '=', 'invoice.id_kwitansi')
            ->join('penyewa', 'penyewa.id', '=', 'invoice.id_penyewa')
            ->join('kendaraan', 'kendaraan.no_pol', '=', 'invoice.no_pol')
            ->select('kwitansi.tgl_kwitansi', 'penyewa.nama_penyewa', 'kendaraan.no_pol')
            ->get();
        return view('invoice.index', compact('invoices'));
    }

    public function create(): View
    {
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();

        return view('invoice.create', compact('kwitansi', 'penyewa', 'kendaraan'));
    }

    public function store(Request $request): RedirectResponse
    {
        Invoice::create([
            'id_kwitansi' => $request->id_kwitansi,
            'id_penyewa'  => $request->id_penyewa,
            'no_pol'      => $request->no_pol,
        ]);

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Invoice $invoice): View
    {
        return view('invoice.show', compact('invoice'));
    }

    public function edit(int $id): View
    {
        $invoice = Invoice::findOrFail($id);
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();

        return view('invoice.edit', compact('invoice', 'kwitansi', 'penyewa', 'kendaraan'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->update([
            'id_kwitansi' => $request->id_kwitansi,
            'id_penyewa'  => $request->id_penyewa,
            'no_pol'      => $request->no_pol,
        ]);

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy(int $id): RedirectResponse
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('invoice.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
