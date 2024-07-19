@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Invoice</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Invoice Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('invoice.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <a href="{{ route('penyewa.index') }}" class="btn btn-md btn-secondary mb-3">PENYEWA</a> <!-- New button for Penyewa -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Kwitansi</th>
                                    <th scope="col">Nama Penyewa</th>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col" style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($invoices as $index => $data)
                                    <tr>            
                                        <td>{{ $data->tgl_kwitansi }}</td>
                                        <td>{{ $data->nama_penyewa }}</td>
                                        <td>{{ $data->no_pol }}</td>
                                        <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                                <a href="" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Invoice Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        {{-- {{ $kendaraan->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
@endsection
