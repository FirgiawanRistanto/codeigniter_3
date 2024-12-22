<div class="container p-5">
  <h3 class="mb-3 text-info fs-4">EDIT DOSEN
    <a class="btn btn-info btn-sm float-end" href="<?php echo base_url('dosen') ?>">Kembali </a>
  </h3>
  <form action="<?php echo base_url("dosen/update/" . $dosen['id']) ?>" method="POST">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">NIDN</label>
      <input type="text" class="form-control" name="nidn" value="<?php echo $dosen['nidn'] ?>">
      <?php echo form_error('nidn', '<div class="text-sm text-danger">', '</div>'); ?>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="<?php echo $dosen['nama'] ?>">
      <?php echo form_error('nama', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" value="<?php echo $dosen['alamat'] ?>">
      <?php echo form_error('alamat', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Prodi</label>
      <input type="text" class="form-control" name="prodi" value="<?php echo $dosen['prodi'] ?>">
      <?php echo form_error('prodi', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>

    <button type="submit" class="btn btn-warning btn-sm">Update</button>
    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
  </form>

</div>