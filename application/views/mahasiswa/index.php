

<div class="container">

    <?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

        </div>
    </div>
<?php endif; ?>

<div class="row mt-3">
    <div class="col-md-6">

    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
</div>
<br>
 <div class="row-mt-3">
    <div class="col-md-6">
        <form action="" method="post">
        <input type="text" class="form-control" placeholder="Cari data mahasiswa..." neme="keyword">
        
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
        </form>
    </div>
 </div>




<div class="row mt-3">
    <div class="col-md-6">
    <h3>Daftar Mahasiswa</h3>
     <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-danger" role="alert">
        data mahasiswa tidak ditemukan.
        </div>
    <?php endif; ?>
    <ul class="list-group-item">
        <?php foreach( $mahasiswa as $mhs) : ?>
        <li class="list-group-item">
            <?= $mhs['nama'] ?>
            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right">Ubah</a>
            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary float-right">detail</a>
        </li>
    <?php endforeach; ?>
    </ul>


    </div>
</div>


</div>