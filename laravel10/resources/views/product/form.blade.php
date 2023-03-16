@extends('layouts.app')

@section('title', 'Form Product')

@section('contents')
  <form action="{{ isset($product) ? route('product.tambah.update', $product->id) : route('product.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($product) ? 'Form Edit Product' : 'Form Tambah Product' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_product">Kode Product</label>
              <input type="text" class="form-control" id="kode_product" name="kode_product" value="{{ isset($product) ? $product->kode_product : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_product">Nama Product</label>
              <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ isset($product) ? $product->nama_product : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kategori --</option>
								@foreach ($kategori as $row)
									<option value="{{ $row->id }}" {{ isset($product) ? ($product->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->kode_kategori }}</option>
								@endforeach
							</select>
            </div>
            <div class="form-group">
              <label for="harga_product">Harga</label>
              <input type="number" class="form-control" id="harga_product" name="harga_product" value="{{ isset($product) ? $product->harga_product : '' }}">
            </div>
            <div class="form-group">
              <label for="jumlah_product">Jumlah</label>
              <input type="number" class="form-control" id="jumlah_product" name="jumlah_product" value="{{ isset($product) ? $product->jumlah_product : '' }}">
            </div>
            <div class="form-group">
              <label for="foto_product">Foto</label>
              <input type="file" class="form-control" id="foto_product" name="foto_product" value="{{ isset($product) ? $product->foto_product : '' }}">
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
