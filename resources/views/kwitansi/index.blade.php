@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Kwitansi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="my-3">Daftar Kwitansi</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="{{ route('kwitansi.create') }}" class="btn btn-md btn-success btn-custom">Tambah Kwitansi</a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID Kwitansi</th>
                                    <th scope="col">Tanggal Kwitansi</th>
                                    <th scope="col" style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kwitansi as $index => $kwitansi)
                                    <tr>
                                        <td class="text-center">{{ ++$index }}</td>
                                        <td>{{ $kwitansi->id }}</td>
                                        <td>{{ $kwitansi->tgl_kwitansi }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST">
                                                <a href="{{ route('kwitansi.show', $kwitansi->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Data Kwitansi Belum Ada.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $kwitansis->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
@endsection