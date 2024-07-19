<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Create Sewa</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('sewa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputNoPol">No Polisi</label>
                            <input type="text" name="no_pol" class="form-control" id="exampleInputNoPol">
                            @error('no_pol')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTanggalSewa">Tanggal Sewa</label>
                            <input type="date" name="tgl_sewa" class="form-control" id="exampleInputTanggalSewa">
                            @error('tgl_sewa')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTanggalSelesai">Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" class="form-control" id="exampleInputTanggalSelesai">
                            @error('tgl_selesai')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputTeleponTujuan">Telepon Tujuan</label>
                            <input type="text" name="tlp_tujuan" class="form-control" id="exampleInputTeleponTujuan">
                            @error('tlp_tujuan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputAlamatTujuan">Tempat Tujuan</label>
                            <input type="text" name="alamat_tujuan" class="form-control" id="exampleInputAlamatTujuan">
                            @error('alamat_tujuan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputBiayaSewa">Biaya Sewa</label>
                            <input type="number" name="biaya_sewa" class="form-control" id="exampleInputBiayaSewa">
                            @error('biaya_sewa')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputKota">Kota</label>
                            <input type="text" name="kota" class="form-control" id="exampleInputKota">
                            @error('kota')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputJumlahPenumpang">Jumlah Penumpang</label>
                            <input type="number" name="jlh_penumpang" class="form-control" id="exampleInputJumlahPenumpang">
                            @error('jlh_penumpang')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('sewa.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
