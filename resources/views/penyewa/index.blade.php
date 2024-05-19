
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Penyewaan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('penyewa.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-md btn-secondary mb-3">KENDARAAN</a> <!-- New button for Kendaraan -->
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
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
