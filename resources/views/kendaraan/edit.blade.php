
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" >
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="exampleInputEmail1">No polisi</label>
                                <input type="text" name="no_pol" value="{{ $kendaraan->no_pol }}" id='no_pol'>
                            
                                @error('no_pol')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">No mesin</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email', $pengguna->email) }}">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password', $pengguna->password) }}">
                              @error('password')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Level</label>
                                <select class="form-control" name="level" id="exampleFormControlSelect1">
                                  <option value="{{ old('level', $pengguna->level) }}"> {{ old('level', $pengguna->level) }} </option>
                                  <option value="dosen">Dosen</option>
                                  <option value="mahasiswa">Mahasiswa</option>
                                  <option value="admin">Administrator</option>
                                 </select>
                                 @error('level')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
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
</body>
</html>
