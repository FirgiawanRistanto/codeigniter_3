<?= $this->session->flashdata(''); ?>

<div class="container p-5">
  <h3 class="mb-3 text-info fs-4">TAMBAH DOSEN
    <a class="btn btn-primary btn-sm float-end" href="<?php echo base_url('dosen') ?>">Kembali </a>
  </h3>
  <form action="<?php echo base_url("dosen/act_tambah") ?>" method="POST">
    <div class="mb-3">
      <label>NIDN</label>
      <input type="text" class="form-control" name="nidn" id="nidn">
      <?php echo form_error('nidn', '<div class="text-sm text-danger">', '</div>'); ?>
    </div>
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" class="form-control" name="nama" id="nama">
      <?php echo form_error('nama', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>
    <div class="mb-3">
      <label>Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat">
      <?php echo form_error('alamat', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>
    <div class="mb-3">
      <label>Prodi</label>
      <input type="text" class="form-control" name="prodi" id="prodi">
      <?php echo form_error('prodi', '<div class="text-sm text-danger">', '</div>'); ?>

    </div>

    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
  </form>

</div>