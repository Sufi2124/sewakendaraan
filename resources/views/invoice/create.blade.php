<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Create Invoice</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('invoice.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputTanggalKwitansi">Tanggal Kwitansi</label>
                            <input type="date" name="tgl_kwitansi" class="form-control" id="exampleInputTanggalKwitansi">
                            @error('tgl_kwitansi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNamaPenyewa">Nama Penyewa</label>
                            <input type="text" name="nama_penyewa" class="form-control" id="exampleInputNamaPenyewa">
                            @error('nama_penyewa')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNoPol">No Polisi</label>
                            <input type="text" name="no_pol" class="form-control" id="exampleInputNoPol">
                            @error('no_pol')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
