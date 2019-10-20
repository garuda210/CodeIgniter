<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Detail Data Anime
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $anime['judul'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Genre : <?= $anime['genre']?></h6>
                <p class="card-text">Jumlah Episode :<?= $anime['episode'];?></p>
                <a href="<?=base_url()?>anime" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>