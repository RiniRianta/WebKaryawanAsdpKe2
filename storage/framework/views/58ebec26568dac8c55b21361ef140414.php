<?php $__env->startSection('konten'); ?>
<?php if(session('status')): ?>
    <div id="status-alert" class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<script>
    // Menghilangkan pesan setelah 3 detik
    setTimeout(() => {
        const alert = document.getElementById('status-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500); // Hapus elemen setelah transisi selesai
        }
    }, 3000); // 3000 ms = 3 detik
</script>

<div class="d-flex">

    <h4 class="text-center mt-5">List Karyawan</h4>
    <div class="ms-auto">
        <a class="btn btn-success mt-5" href="<?php echo e(route('karyawan.tambah')); ?>">Tambah Karyawan</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $karyawan->toArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($no + 1); ?></td> <!-- Nomor urut -->
    <td><?php echo e($data['nik']); ?></td> <!-- Gunakan array akses dengan string key -->
    <td><?php echo e($data['Nama']); ?></td>
            <td><?php echo e($data['Alamat']); ?></td>
            <td><?php echo e($data['No_Hp']); ?></td>
            <td><?php echo e($data['Jenis_Kelamin']); ?></td>
            <td><?php echo e($data['Hobi']); ?></td>
    <td>
        <a href="<?php echo e(route('karyawan.edit', $data['id'])); ?>" class="btn btn-sm btn-warning">Edit</a>
        <form action="<?php echo e(route('karyawan.delete', $data['id'])); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
        </form>
        
    </td>

    
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\webkaryawanasdp\resources\views/karyawan/tampil.blade.php ENDPATH**/ ?>