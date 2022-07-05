<div class="container">
    <div class="row">
        <div class="col">
            <h1>Tambah</h1>
            <form action="/pages/list-binatang/create.php" method="post">
                <div class="mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="SIMPAN">
            </form>
        </div>
    </div>
</div>