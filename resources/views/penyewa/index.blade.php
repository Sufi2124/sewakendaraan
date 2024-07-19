@extends('template.app')
@section('content')
<div class="section-header">
    <h1>Halaman Penyewa</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<body style="background: white">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Penyewaan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('penyewa.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-md btn-secondary mb-3">KENDARAAN</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Penyewa</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($penyewa as $index => $data)
                                    <tr>
                                        <td>{{ $data->nama_penyewa }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_hp }}</td>
                                        <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('penyewa.destroy', $data->id)}}" method="POST">
                                                <a href="{{route('penyewa.show', $data->id)}}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{route('penyewa.edit', $data->id)}}" class="btn btn-sm btn-primary">EDIT</a>
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
                                                Data Penyewa Belum Ada.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $penyewa->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
@endsection