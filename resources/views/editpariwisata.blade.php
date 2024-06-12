@extends('layout.admin.main')

@section('container')
<div class="col-md-8 col-xs-12">
    <div class="white-box">
        <form id="add" method="POST" enctype="multipart/form-data">
            @csrf
            <img src="{{asset($pariwisata->gambar) }}" width="100" height="100" alt="">
            <div class="mb-3">
                <label for="formFile" class="form-label">Chose Product Image :</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="name_product" class="form-label">Name Pariwisata : </label>
                <input type="text" value="{{$pariwisata->nama }}" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="name_product" class="form-label">Lokasi Pariwisata : </label>
                <input value="{{$pariwisata->lokasi }}" type="text" class="form-control" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi Pariwisata :</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required rows="3">{{$pariwisata->deskripsi }}</textarea>
            </div>
            <div class="mb-3">
                <label for="name_product" class="form-label">Operasional Pariwisata : </label>
                <input value="{{$pariwisata->operasional }}" type="text" class="form-control" id="operasional" name="operasional" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option selected value="{{$pariwisata->kategori->id }}">{{$pariwisata->kategori->nama }}</option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>
@endsection