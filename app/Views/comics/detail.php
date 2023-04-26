<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                <?= $comic['judul']; ?>
            </h1>
            <ul>
                <li>
                    Penulis:
                    <?= $comic['penulis']; ?>
                </li>
                <li>
                    Penerbit:
                    <?= $comic['penerbit']; ?>
                </li>
                <li>
                    Sampul:
                    <?= $comic['sampul']; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>