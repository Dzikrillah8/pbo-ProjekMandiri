@extends('index')
@section('title', 'Laporan')
@section('content')

<!-- hero -->

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">
                    Website Pengaduan Sekolah
                </div>
                <div class="buttons">
                    <a href="#buat-laporan" class="btn btn-primary">Buat Laporan</a>
                    <a href="{{route('daftar.index')}}" class="btn btn-outline-secondary ms-3">Daftar Laporan</a>
                </div>
            </div>
            <div class="col-md-6">
              <div class="img">
                <img src="img/hero-img.png" alt="" class="w-100">
              </div>
            </div>
        </div>
    </div>
  </section>

<!-- content -->

<section class="content mt-4" id="buat-laporan">
    <div class="container d-flex justify-content-center" style="width: 650px;">
      <div class="row border p-3 bg-white shadow box-area">
        <div class="header-text d-flex justify-content-center">
          <p>Buat Laporan</p>
        </div>
        <form action="{{ route('laporan.store') }}" enctype="multipart/form-data" method="POST">
          @csrf
        <div class="col-md-12">
          <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            <div class="row">
              <div class="col-8">
                  <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                  </div>

                  <div class="col-4 ">
                    <select class="form-select  @error('kelas') is-invalid @enderror" name="kelas" id="kelas" aria-label="kelas">
                      <option selected>Kelas</option>
                      <option value="10 RPL 1">10 RPL 1</option>
                      <option value="11 RPL 1">11 RPL 1</option>
                      <option value="12 RPL 1">12 RPL 1</option>
                    </select>
                    @error('kelas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                </div>

                <br>

              <div class="row">
                <div class="col-md-4 ">
                  <div class="form-group">
                    <label for="tanggal">Tanggal :</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}">
                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label for="judul_laporan">Judul Laporan :</label>
                    <input type="text" name="judul_laporan" id="judul_laporan" class="form-control @error('judul_laporan') is-invalid @enderror" value="{{ old('judul_laporan') }}">
                    @error('judul_laporan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                  
              </div>

            </div>

            <br>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="keterangan"> Keterangan :</label>
                  <textarea name="keterangan" id="keterangan" class="form-control form-control-lg fs-6 @error('keterangan') is-invalid @enderror"> {{ old('keterangan') }}</textarea>
                  @error('keterangan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
  
            <br>
  
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Photo :</label>
                  <input type="file" name="photo" id="name" class="form-control @error('photo') is-invalid @enderror" >
                  @error('photo')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
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
        </div>
      </div>
    </div>
  </section>

  <!-- content end -->

  @endsection
