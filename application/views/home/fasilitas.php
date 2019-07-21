<div class="container">
    <div class="row ">
        <h3 class="light center grey-text text-darken-3">Pemerisakan dan Pelayanan</h3>
         <div class="light">
            <?php foreach ($pemeriksaan as $p) : ?>
              <div class="row light grey lighten-5" style="padding: 2%; border-radius: 4px;">
              <p><?= $p['isi']; ?></p>
              </div>
            <?php endforeach; ?>

            <?php foreach ($pelayanan as $e) : ?>
              <div class="row light grey lighten-5" style="padding: 2%; border-radius: 4px;">
              <p><?= $e['isi']; ?></p>
              </div>
            <?php endforeach; ?>

          </div>
        </div>

    </div>
</div>