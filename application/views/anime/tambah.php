<div class="container">
    <div class="row mt-3">
    <div class="card">
        <div class="card-header">
        Form Tambah Data Anime
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" >
                <small id="emailHelp" class="form-text text-danger"><?= form_error('judul');?></small>
            </div>
            <div class="form-group">
                <label for="episode">Jumlah Episode</label>
                <input type="text" class="form-control" id="episode" name="episode" >
                <small id="emailHelp" class="form-text text-danger"><?= form_error('episode');?></small>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <!-- 'Sport', 'Actions', 'Thriller', 'Comedi', 'Sci-FI' -->
                <select class="form-control" name="genre" id="genre" name="genre">
                    <option value="Sport">Sport</option>
                    <option value="Actions">Actions</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Comedi">Comedi</option>
                    <option value="Sci-FI"> Sci-FI</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-outline-primary float-right">
            Tambah Data
            </button>
        </form>
        <br>
        </div>
        </div>
    </div>
</div>