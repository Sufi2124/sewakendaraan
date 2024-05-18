
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <a href="{{ route('penyewa.index') }}" class="btn btn-md btn-secondary mb-3">PENYEWA</a> <!-- New button for Penyewa -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">No Mesin</th>
                                    <th scope="col">Tipe Mobil</th>
                                    <th scope="col">Nama Mobil</th>
                                    <th scope="col">Merk</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Tarif</th>
                                    <th scope="col" style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kendaraan as $index => $data)
                                    <tr>
                                        <td>{{ $data->no_pol }}</td>
                                        <td>{{ $data->no_mesin }}</td>
                                        <td>{{ $data->jnis_mobil }}</td>
                                        <td>{{ $data->nama_mobil }}</td>
                                        <td>{{ $data->merk }}</td>
                                        <td>{{ $data->kapasitas }}</td>
                                        <td>{{ $data->tarif }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                                <a href="{{ route('kendaraan.index', $kendaraan->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Kendaraan Belum Ada.
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
    </div>
</body>
</html>
