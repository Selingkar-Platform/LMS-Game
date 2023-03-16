@extends('layouts.app')

@section('title', 'Form Kategori')

@section('contents')
  <form action="{{ isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_kategori">Nama Kategori</label>
              <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" value="{{ isset($kategori) ? $kategori->kode_kategori : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
