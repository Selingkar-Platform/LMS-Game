@extends('layouts.app')

@section('title', 'Data Product')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
      <a href="{{ route('product.tambah') }}" class="btn btn-primary mb-3">Tambah Product</a>
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Foto</th>
              <th>Kode Product</th>
              <th>Nama Product</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Jumlah</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->foto_product }}</td>
                <td>{{ $row->kode_product }}</td>
                <td>{{ $row->nama_product }}</td>
                <td>{{ $row->kategori->kode_kategori }}</td>
                <td>{{ $row->harga_product }}</td>
                <td>{{ $row->jumlah_product }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('product.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('product.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
