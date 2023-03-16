<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $table = 'product';

	protected $fillable = ['kode_product', 'nama_product', 'id_kategori', 'harga_product', 'jumlah_product','foto_product'];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
