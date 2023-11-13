@extends('index')
@section('title', 'Admin Home')
@section('content')

      <!-- daftar  -->

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
                            <th>Status</th>
                            <th>Action</th>
                        </thead> 
                        @foreach ($data as $laporan)
                        <tr>
                            
                            <td>{{$laporan->judul_laporan}}</td>
                            <td>{{$laporan->tanggal}}</td>
                            <td>
                                @if ($laporan->status == 'menunggu')
                                <span class="badge rounded-pill bg-secondary">{{$laporan->status}}</span>
                                @elseif ($laporan->status == 'diproses')
                                    <span class="badge rounded-pill bg-warning">{{$laporan->status}}</span>
                                @elseif ($laporan->status == 'telah diproses')
                                    <span class="badge rounded-pill bg-success">{{$laporan->status}}</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center" style="gap:3px">
                                    <a href="{{route('detail.index', $laporan->id)}}" class="btn btn-info rounded-pill"><i class="bi bi-info-circle"></i></a>
                                {{-- <form action="{{route('laporan.delete', $laporan->id)}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini?')"> Delete </button>
                                </form> --}}
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                
              </div>
          </div>
      </section>
      
      
      <!-- detail end -->

@endsection