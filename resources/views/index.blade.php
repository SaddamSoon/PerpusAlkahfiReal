@extends('layouts.default')

@section('content')

    
<div class="d-flex justify-content-around" style="height: 100%;">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar" id="sidebar" style="width: 300px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Pustaka Alkahfi</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Home
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="" alt="gambar" width="32" height="32" class="rounded-circle me-2">
            <strong>Saddam</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 ml-5">
                
            </div>
        </div>
        <div class="container-fluid">
            <button class="btn btn-primary mt-2" onclick="togel()"><img src="{{ asset('images/titiktiga.png') }}" alt="" width="20px" height="20px"></button>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 ml-5">
                    <h2>DATA-DATA BUKU</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ml-2">
                    <a href="{{ url('create') }}" class="btn btn-primary ml-2 mb-3">Tambah Data +</a>
                    
                </div>
            </div>
            <div class="row d-flex justify-content-center flex-nowrap">
                <div class="col-md-10 flex-nowrap">
                    
                    <table class="table table-bordered table-striped" style="width:800px;">
    
                        <tr class="text-center">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>ISBN</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($data as $index => $d)
                        <tr class="text-center">
                            <th>{{ $index + $data->firstItem() }}</th>
                            <td>{{ $d->judul }}</td>
                            <td>{{ $d->pengarang }}</td>
                            <td>{{ $d->penerbit }}</td>
                            <td>{{ $d->isbn }}</td>
                            <td>{{ $d->thterbit }}</td>
                            <td width=150 height=70>
                                <a href="{{ url('destroy/'.$d->id) }}" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
                                <a href="{{ url('show/'.$d->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        
    
                    </table>
                </div>
            </div>
        </div>
    </div>


<script>
    function togel(){
        // let togel = document.queryselectorAll('.tombol');
        let sidebar = document.getElementById('sidebar');
        // sidebar.classList.toggle('muncul');
        if(sidebar.style.visibility === "visible") {
            sidebar.style.visibility = "hidden";
        }else{
            sidebar.style.visibility = "visible";
        }
    }
    
    


</script>



    
@endsection