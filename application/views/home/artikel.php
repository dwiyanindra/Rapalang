<div class="continer">
    <div class="row">
        <h3 class="light center grey-text text-darken-3">Berita & Artikel</h3>
        <?php foreach ($artikel as $a) : ?>

            <h5 class="center"><?= $a['judul']; ?></h5>
            <div class="center">
                <div class="card-image">
                <img src="<?php echo base_url(); ?>gambar/artikel/<?= $a['gambar']; ?>" class="center">
              </div>
            </div>
            <p><?= substr($a['deskripsi'], 0); ?><a href="Artikel/getArtikel/<?= $a['id']; ?>"></a></p>
        <?php endforeach; ?>
    </div>
</div>