<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Kendaraan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('kendaraan.index') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="no_pol" class="form-label">No Polisi</label>
                            <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_mesin" class="form-label">No Mesin</label>
                            <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jnis_mobil" class="form-label">Tipe Mobil</label>
                            <select class="form-select" id="jnis_mobil" name="jnis_mobil" required>
                                <option value="mpv" {{ $kendaraan->jnis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                                <option value="city" {{ $kendaraan->jnis_mobil == 'city' ? 'selected' : '' }}>City</option>
                                <option value="suv" {{ $kendaraan->jnis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ $kendaraan->nama_mobil }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" class="form-control" id="merk" name="merk" value="{{ $kendaraan->merk }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" value="{{ $kendaraan->kapasitas }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="tarif" class="form-label">Tarif</label>
                            <input type="number" class="form-control" id="tarif" name="tarif" value="{{ $kendaraan->tarif }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
            
            <div class="mt-5">
                <table class="table table-striped">
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
                                <td>
                                    <a href="{{ route('kendaraan.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('kendaraan.destroy', $data->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
