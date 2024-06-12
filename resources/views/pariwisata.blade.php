@extends('layout.admin.main')

@section('container')

<!-- Button trigger modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pariwisata</h1>
          </div>
        <div class="modal-body">
            <form id="add" action="/tambahPariwisata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Chose Product Image :</label>
                    <input class="form-control" type="file" required ="gambar" name="gambar">
                </div>
                <div class="mb-3">
                    <label for="name_product" class="form-label">Name Pariwisata : </label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="name_product" class="form-label">Lokasi Pariwisata : </label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" required>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Deskripsi Pariwisata :</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="name_product" class="form-label">Operasional Pariwisata : </label>
                    <input type="text" class="form-control" id="operasional" name="operasional" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori" required>
                        @foreach ($kategori as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                  </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" form="add">Save</button>
        </div>
      </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title ">Wisata dan Kuliner</h3>
        <button type="button" class="btn btn-primary font-weight-bold fw-bold" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus-circle"></i> Tambah Pariwisata
        </button>
               
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Operasional</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pariwisata as $item)
                    <tr>
                        <td><img width="100" height="100" src="{{ asset($item->gambar) }}" alt=""></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->operasional }}</td>
                        <td>{{ $item->kategori->nama }}</td>
                        <td>
                            <div style="display: flex;">
                                <a href="/editPariwisata/{{$item->id}}" class="btn btn-primary" style="margin-right: 5px;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="/deletePariwisata" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>                                                   
                        <td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection