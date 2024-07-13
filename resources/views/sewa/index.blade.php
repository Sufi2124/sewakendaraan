
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Sewa</h3>
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
                                    <th scope="col">Tanggal Sewa</th>
                                    <th scope="col">Tanggal selesai</th>
                                    <th scope="col">Telepon Tujuan</th>
                                    <th scope="col">Tempat Tujuan</th>
                                    <th scope="col">Biaya Sewa</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Jumlah Penumpang</th>
                                    <th scope="col" style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($sewa as $index => $data)
                                    <tr>
                                        
                                        <td>{{ $data->no_pol }}</td>
                                        <td>{{ $data->tgl_sewa }}</td>
                                        <td>{{ $data->tgl_selesai }}</td>
                                        <td>{{ $data->tlp_tujuan }}</td>
                                        <td>{{ $data->alamat_tujuan }}</td>
                                        <td>{{ $data->biaya_sewa }}</td>
                                        <td>{{ $data->kota }}</td>
                                        <td>{{ $data->jlh_penumpang }}</td>
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
                                                Data Penyewa Belum Ada.
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