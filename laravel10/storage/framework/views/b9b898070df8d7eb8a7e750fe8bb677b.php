<?php $__env->startSection('title', 'Form Product'); ?>

<?php $__env->startSection('contents'); ?>
  <form action="<?php echo e(isset($product) ? route('product.tambah.update', $product->id) : route('product.tambah.simpan')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(isset($product) ? 'Form Edit Product' : 'Form Tambah Product'); ?></h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_product">Kode Product</label>
              <input type="text" class="form-control" id="kode_product" name="kode_product" value="<?php echo e(isset($product) ? $product->kode_product : ''); ?>">
            </div>
            <div class="form-group">
              <label for="nama_product">Nama Product</label>
              <input type="text" class="form-control" id="nama_product" name="nama_product" value="<?php echo e(isset($product) ? $product->nama_product : ''); ?>">
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori</label>
							<select name="id_kategori" id="id_kategori" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kategori --</option>
								<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($row->id); ?>" <?php echo e(isset($product) ? ($product->id_kategori == $row->id ? 'selected' : '') : ''); ?>><?php echo e($row->kode_kategori); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
            </div>
            <div class="form-group">
              <label for="harga_product">Harga</label>
              <input type="number" class="form-control" id="harga_product" name="harga_product" value="<?php echo e(isset($product) ? $product->harga_product : ''); ?>">
            </div>
            <div class="form-group">
              <label for="jumlah_product">Jumlah</label>
              <input type="number" class="form-control" id="jumlah_product" name="jumlah_product" value="<?php echo e(isset($product) ? $product->jumlah_product : ''); ?>">
            </div>
            <div class="form-group">
              <label for="foto_product">Foto</label>
              <input type="file" class="form-control" id="foto_product" name="foto_product" value="<?php echo e(isset($product) ? $product->foto_product : ''); ?>">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Magang\laravel10\resources\views/product/form.blade.php ENDPATH**/ ?>