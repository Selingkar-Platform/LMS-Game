<?php $__env->startSection('title', 'Form Kategori'); ?>

<?php $__env->startSection('contents'); ?>
  <form action="<?php echo e(isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo e(isset($kategori) ? 'Form Edit Kategori' : 'Form Tambah Kategori'); ?></h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="kode_kategori">Nama Kategori</label>
              <input type="text" class="form-control" id="kode_kategori" name="kode_kategori" value="<?php echo e(isset($kategori) ? $kategori->kode_kategori : ''); ?>">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project Magang\laravel10\resources\views/kategori/form.blade.php ENDPATH**/ ?>