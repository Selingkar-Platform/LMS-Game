<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index()
	{
		$product = Product::get();

		return view('product.index', ['data' => $product]);
	}

	public function tambah()
	{
		$kategori = Kategori::get();

		return view('product.form', ['kategori' => $kategori]);
	}

	public function simpan(Request $request)
	{
		$data = [
			'kode_product' => $request->kode_product,
			'nama_product' => $request->nama_product,
			'id_kategori' => $request->id_kategori,
			'harga_product' => $request->harga_product,
			'jumlah_product' => $request->jumlah_product,
			'foto_product' => $request->foto_product,
		];

		Product::create($data);

		return redirect()->route('product');
	}

	public function edit($id)
	{
		$product = Product::find($id)->first();
		$kategori = Kategori::get();

		return view('product.form', ['product' => $product, 'kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_product' => $request->kode_product,
			'nama_product' => $request->nama_product,
			'id_kategori' => $request->id_kategori,
			'harga_product' => $request->harga_product,
			'jumlah_product' => $request->jumlah_product,
			'foto_product' => $request->foto_product,
		];

		Product::find($id)->update($data);

		return redirect()->route('Product');
	}

	public function hapus($id)
	{
		Product::find($id)->delete();

		return redirect()->route('Product');
	}
}
