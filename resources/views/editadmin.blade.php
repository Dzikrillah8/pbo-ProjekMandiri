@extends('index')
@section('title', 'Admin')
@section('content')


<section class="editAdmin mt-4">
    <div class="container d-flex justify-content-center" style="width: 650px;">
      <div class="row border p-3 bg-white shadow box-area">
        <div class="header-text d-flex justify-content-center">
          <p>Buat Laporan</p>
        </div>
        <form action="{{ route('admin.update', $data->id) }}" enctype="multipart/form-data" method="POST">
          @csrf
          @method('PUT')
        <div class="col-md-12">
            <div class="row">
              <div class="col-12">
                  <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}" readonly>
                    </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <label for="kelas">Kelas :</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="{{$data->kelas}}" readonly>
                        </div>
                      </div>

                        <div class="col-6">
                            <div class="form-group">
                              <label for="tanggal">Tanggal :</label>
                              <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{$data->tanggal}}" readonly>
                              </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-12">
                          <div class="form-group">
                            <label for="judul_laporan">Judul laporan :</label>
                            <input type="text" name="judul_laporan" id="judul_laporan" class="form-control" value="{{$data->judul_laporan}}" readonly>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="keterangan"> Keterangan :</label>
                              <input type="textarea" name="keterangan" id="keterangan" class="form-control" value="{{$data->keterangan}}" readonly>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="photo" class="form-label">Photo :</label>
                              <input type="hidden" name="oldPhoto" value="{{ $data->photo }}">
                              <img src="{{ asset('public/photo/' . $data->photo) }}" alt="{{$data->photo}}" class="img-thumbnail mb-2" width="150px">      
                          </div>
                          </div>
                        </div>

                        <br>

                        <div class="row">
                          <div class="col-md-4">
                            <label for="tanggapan"> Status Laporan :</label>
                            <select class="form-select" name="status" id="status" aria-label="status">
                              <option selected>{{$data->status}}</option>
                              <option value="diproses">diproses</option>
                              <option value="telah diproses">telah diproses</option>
                            </select>
                          </div>
                        </div>

                        <br>

                        <div class="row">
                          <div class="col-md-8">
                            <div class="form-group">
                              <div class="form-group">
                                <label for="tanggapan"> Tanggapan :</label>
                                <input type="textarea" name="tanggapan" id="tanggapan" class="form-control" value="{{$data->tanggapan}}">
                              </div>
                            </div>
                          </div>
                          
                        </div>

                        <br><br>
  
            <div class="form-group d-flex justify-content-end ">
              <input class="btn btn-primary mx-2" type="submit" value="simpan">
            </div>

          </div>
            </form>
            
            </div>
          </div>

          <br><br>
  </section>

  @endsection