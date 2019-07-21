 <div class="continer">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Berita & Artikel</h3>
        <?php foreach ($artikel as $a) : ?>
          <div class="col m4 s12">
            <div class="card hoverable">
              <div class="card-image">
                <img src="<?php echo base_url(); ?>gambar/artikel/<?= $a['gambar']; ?>" class="center" width="400">
              </div>
              <div class="card-content">
                <h5 class="pink-text text-lighten-1 bold"><?= $a['judul']; ?></h5>
                <p><?= substr($a['deskripsi'], 0, 100); ?>....</p>
              </div>
              <div class="card-action">
                <a href="<?php echo base_url(); ?>Artikel/getArtikel/<?= $a['id']; ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>