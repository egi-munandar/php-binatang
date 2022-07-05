<div class="container mt-3">
    <div class="row">
        <div class="col mb-3">
            <a href="/pages/list-binatang/create.php" class="btn btn-success">TAMBAH</a>
        </div>
    </div>
    <div class="row">
        <?php
        if (count($res)) {
            foreach ($res as $re) {
                echo "<div class='col-md-4 col-sm-12 mb-3'>
                            <div class='card'>
                                <div class='card-body'>
                                <h3 class='card-title'> " . $re->nama_binatang . " </h3>
                                <p>
                                     " . $re->deskripsi . "
                                </p>
                                <a href='/pages/list-binatang/edit.php?id=" . $re->id . "' class='card-link text-warning'>EDIT</a>
                                <a href='/pages/list-binatang/delete.php?id=" . $re->id . "' class='card-link text-danger'>HAPUS</a>
                                </div>
                            </div>
                        </div>
                    ";
            }
        }
        ?>
    </div>
</div>