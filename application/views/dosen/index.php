<div class="container mt-3">
  <h1 class="fs-4">HALAMAN DATA DOSEN <a class="btn btn-primary btn-sm float-end" href="<?php echo base_url('dosen/tambah') ?>">Tambah Data</a></h1>
  
<?= $this->session->flashdata('pesan'); ?>
  <!-- tabel data dosen -->
  
  <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIDN</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Prodi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $no = 0;
      foreach ($dosen as $data) {
        $no++;
      ?>
        <tr>
          <th scope="row"><?php echo $no ?></th>
          <td><?php echo $data->nidn ?></td>
          <td><?php echo $data->nama ?></td>
          <td><?php echo $data->alamat ?></td>
          <td><?php echo $data->prodi ?></td>
          <td>
            <a href="<?php echo base_url('dosen/edit/'.$data->id) ?>" class="btn btn-warning btn-sm me-1" >
              <i class="bi bi-pencil-square" ></i>
            </a>
            <a href="<?php echo base_url('dosen/delete/'.$data->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin akan menghapus data ini?')" >
              <i class="bi bi-trash3"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <!-- tabel data dosen end -->

</div>