@extends('layouts.master')
@section('judul','Data Pelanggan')
@section('content-header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Pelanggan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pelanggan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="/pelanggan/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NAMA</th>
                <th scope="col">HP</th>
                <th scope="col">ALAMAT</th>
                <th scope="col">ACTION</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $item)
                <tr>
                    <th scope="row">{{$nomor++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->hp}}</td>
                    <td>{{$item->pelanggan}}</td>
                    <td>
                        <a href="/pelanggan/edit/{{$item->id}}" class="btn btn-sm btn-info">edit</a>
                        <a href="#" class="btn btn-sm btn-danger">hapus</a>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
      </div>
      <!-- /.card-body -->
      
    </div>
    <!-- /.card -->

  </section>
@endsection