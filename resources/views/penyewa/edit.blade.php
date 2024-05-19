
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penyewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Penyewa</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <form action="{{ route('penyewa.update', $penyewa->id) }}" method="POST" >
                          @csrf
                          @method('patch')
                            <div class="form-group">
                              <label for="nama_penyewa">Nama Penyewa</label>
                              <input type="text" name="nama_penyewa" class="form-control" value="{{ $penyewa->nama_penyewa}}" id="nama_penyewa" >                              
                            </div>

                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" name="alamat" class="form-control" value="{{ $penyewa->alamat}}" id="alamat" >                             
                            </div>
                                                       
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="number" name="no_hp" class="form-control" value="{{ $penyewa->no_hp}}" id="no_hp" >                               
                            </div>
                    </div>                    
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                    </form>   
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
