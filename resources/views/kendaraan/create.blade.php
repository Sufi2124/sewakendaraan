<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Create Kendaraan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('kendaraan.index') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="no_pol" class="form-label">No Polisi</label>
                            <input type="text" class="form-control" id="no_pol" name="no_pol" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_mesin" class="form-label">No Mesin</label>
                            <input type="text" class="form-control" id="no_mesin" name="no_mesin" required>
                        </div>
                        <div class="mb-3">
                            <label for="jnis_mobil" class="form-label">Tipe Mobil</label>
                            <select class="form-select" id="jnis_mobil" name="jnis_mobil" required>
                                <option value="" selected disabled>Pilih Tipe Mobil</option>
                                <option value="mpv">MPV</option>
                                <option value="city">City</option>
                                <option value="suv">SUV</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required>
                        </div>
                        <div class="mb-3">
                            <label for="merk" class="form-label">Merk</label>
                           <select class="form-select" id="merk" name="merk" required>
                                <option value="" selected disabled>Pilih Merek Mobil</option>
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="daihatsu">Daihatsu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" required>
                        </div>
                        <div class="mb-3">
                            <label for="tarif" class="form-label">Tarif</label>
                            <input type="number" class="form-control" id="tarif" name="tarif" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>         
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
