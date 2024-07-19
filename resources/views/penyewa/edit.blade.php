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
@endsection      
