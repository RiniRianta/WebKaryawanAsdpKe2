<?php $__env->startSection('konten'); ?>

<h4>Edit Karyawan</h4>
<form action="<?php echo e(route('karyawan.update', $karyawan->id)); ?>" method="post" class="row g-3">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="number" name="nik" value="<?php echo e($karyawan->nik); ?>" id="nik" class="form-control">
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" <?php echo e($karyawan->nama); ?> id="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" <?php echo e($karyawan->alamat); ?> id="alamat" class="form-control">
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">No Hp</label>
        <input type="number" name="no_hp" <?php echo e($karyawan->no_hp); ?> id="no_hp" class="form-control">
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-control" name="jenis_kelamin">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="hobi" class="form-label">Hobi</label>
        <input type="text" name="hobi" <?php echo e($karyawan->hobi); ?> id="hobi" class="form-control">
    </div>

    <button class="btn btn-primary">Edit</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webkaryawanasdp\resources\views/karyawan/edit.blade.php ENDPATH**/ ?>