<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Add Comic</h1>
            <form action="/comic/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label col-form-label-sm">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="judul" name="judul" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label col-form-label-sm">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="penulis" name="penulis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label col-form-label-sm">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="penerbit" name="penerbit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label col-form-label-sm">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="sampul" name="sampul">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label col-form-label-sm"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>