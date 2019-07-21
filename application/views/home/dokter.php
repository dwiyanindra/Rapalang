  <div class="continer">
    <div class="row">
      <h3 class="light center grey-text text-darken-3">Dokter</h3>
      <?php foreach ($dokter as $d) : ?>
        <div class="col m4 s12">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?php echo base_url(); ?>gambar/dokter/<?= $d['foto']; ?>">
              <span class="card-title"><?= $d['nama']; ?></span>
            </div>
            <div class="card-content">
              <p><?= substr($d['keterangan'], 0); ?></p>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
