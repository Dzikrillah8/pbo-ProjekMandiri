@extends('index')
@section('title', 'Detail Laporan')
@section('content')

<section class="detail">
    <div class="container justify-content-center" style="width: 800px;">
        <div class="row border p-3 bg-white shadow box-area">

            <div class="header-text d-flex justify-content-center">
                <p>Detail laporan</p>
            </div>
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header">
                            <h6>{{$data->judul_laporan}}</h6>  
                        </div>
                        <div class="card-body">
                            <h6>Tanggal :</h6>
                            <p>{{ $data->tanggal }}</p>

                            <h6>Keterangan :</h6>
                            <p>{{ $data->keterangan }}</p>
                            
                            <h6>status :</h6>
                            <p>
                                @if ($data->status == 'menunggu')
                                <span class="badge rounded-pill bg-secondary">{{$data->status}}</span>
                                @elseif ($data->status == 'diproses')
                                    <span class="badge rounded-pill bg-warning">{{$data->status}}</span>
                                @elseif ($data->status == 'telah diproses')
                                    <span class="badge rounded-pill bg-success">{{$data->status}}</span>
                                @endif
                            </p>

                            <h6>photo :</h6>
                            <p><img width="150px" class="img-thumbnail" src="{{ asset('storage/photo/' . $data->photo)}}" alt="{{$data->photo}}"></p>

                        </div>
                    </div>
                    
                </div>
            
        </div>
    </div>
</section>

@endsection