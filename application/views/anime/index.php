
<div class="container">

        <?php if($this->session->flashdata('flash')): ?>

        <div class="row mt-3">
            <div class="col-md-6">  
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data anime <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            </div>
        </div>

        <?php endif;?>

    <div class="row mt-3">
        <div class="col-md-6">
        <a href="<?= base_url();?>anime/tambah" class="btn btn-outline-primary btn-lg">Tambah Data Anime</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Anime ... " name="keyword">
            <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit" id="cari">Cari</button>
            </div>
            </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Anime</h3>
        <?php if (empty($anime)) : ?>
        <div class="alert alert-danger" role="alert">
        Data Anime tidak ditemukan !
        </div>
        <?php endif; ?>
            <ul class="list-group">
            <?php foreach($anime as $anm) : ?>
                <li class="list-group-item"><?=$anm['judul']?></<li>
                <a href="<?=base_url()?>anime/detail/<?= $anm['id'];?>" class="badge badge-pill badge-info float-right ml-1">Detail</a>
                <a href="<?=base_url()?>anime/ubah/<?= $anm['id'];?>" class="badge badge-pill badge-success float-right ml-1">Ubah</a>
                <a href="<?=base_url()?>anime/hapus/<?= $anm['id'];?>" onclick="return confirm('Yakin Ingin Hapus?');" class="badge badge-pill badge-danger float-right ml-1">Hapus</a>
                <?php endforeach;?>
            </ul>
        </div>
    </div>

</div>