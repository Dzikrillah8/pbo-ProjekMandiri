@extends('index')
@section('title', 'Admin')
@section('content')

<section class="daftar">
    <div class="container d-flex justify-content-center" style="width: 800px;">
        <div class="row border p-3 bg-white shadow box-area">
            
            <div class="header-text d-flex justify-content-center">
                <p>Daftar Laporan</p>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Judul Laporan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead> 
                    @foreach ($data as $item)
                    <tr>
                        
                        <td>{{$item->judul_laporan}}</td>
                        <td>{{$item->tanggal}}</td>
                        <td>
                            <div class="d-flex justify-content-center" style="gap:3px">
                                <a href="{{route('admin.edit', $item->id)}}" class="btn btn-info btn-circle"><i class="fa-solid fa-pencil-info"></i></a>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </table>
            
          </div>
      </div>
  </section>

@endsection