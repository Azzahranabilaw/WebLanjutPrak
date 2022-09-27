<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form action="/store" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" id="npm" name="npm" placeholder="Input NPM Anda. Ex: 2057051020">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama Anda. Ex: Azzahra Nabila">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input alamat Anda. Ex: Balam">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="" name="deskripsi" placeholder="Deskripsi"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?= $this->endSection(); ?>