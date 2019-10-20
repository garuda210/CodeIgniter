<div class="container">
    <div class="row mt-3">
    <div class="card">
        <div class="card-header">
        Form Ubah Data Anime
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
            
            <input type="hidden" name="id" value="<?= $anime['id']?>">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?=$anime['judul'];?>" >
                <small class="form-text text-danger"><?= form_error('judul');?></small>
            </div>
            <div class="form-group">
                <label for="episode">Jumlah Episode</label>
                <input type="text" class="form-control" id="episode" name="episode" value="<?=$anime['episode'];?>">
                <small class="form-text text-danger"><?= form_error('episode');?></small>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" name="genre" id="genre" name="genre">
                    <?php foreach ($genre as $j) :?>
                        <?php if ($j == $anime['genre']) :?>
                            <option value="<?= $j ?>" selected><?= $j ?></option>
                        <?php else :?>
                            <option value="<?= $j ?>"><?= $j ?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                </select>
            </div>
            <button type="submit" name="ubah" class="btn btn-outline-success float-right ml-2">
            Ubah Data
            </button>
            <a href="<?=base_url()?>anime" class="btn btn-outline-primary float-right">
            Kembali
            </a>
        </form>
        <br>
        </div>
        </div>
    </div>
</div>