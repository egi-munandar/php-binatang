<div class="container">
    <div class="row">
        <div class="col mb-3">
            <form action="/pages/list-binatang/edit.php" method="post">
                <input type="hidden" name="id" value="<?= $res->id ?>">
                <div class="mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $res->nama_binatang ?>" required>
                </div>
                <div class="mb-2">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" cols="30" rows="10" class="form-control" required><?= $res->deskripsi ?></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="SIMPAN">
            </form>
        </div>
    </div>
</div>