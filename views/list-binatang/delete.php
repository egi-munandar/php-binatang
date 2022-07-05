<div class="container">
    <div class="row">
        <div class="col mt-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-danger">HAPUS <?= $res->nama_binatang ?>?</h1>
                    <form action="/pages/list-binatang/delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $res->id ?>">
                        <input type="submit" class="btn btn-danger" value="HAPUS" />
                        <a href="/pages/list-binatang/" class="btn btn-info">CANCEL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>