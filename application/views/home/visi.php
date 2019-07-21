<div class="container">
    <div class="row ">
        <h3 class="light center grey-text text-darken-3">Visi dan Misi</h3>
            <div class="row center"> 
            <img src="<?php echo base_url(); ?>gambar/album/logo1.png" style="width: 400px; height: 400px" >
            </div> 
            <?php foreach ($visi as $v) : ?>
            <div class="col m6 light grey lighten-5" style="padding: 2%; border-radius: 4px;">
              <h5><?= $v['judul']; ?></h5>
              <p><?= $v['isi']; ?></p>
            </div>
            <?php endforeach; ?>

            <?php foreach ($misi as $m) : ?>
            <div class="col m6  light grey lighten-5" style="padding: 2%; border-radius: 4px;">
              <h5><?= $m['judul']; ?></h5>
              <p><?= $m['isi']; ?></p>
            </div>
            <?php endforeach; ?>

            <?php foreach ($moto as $o) : ?>
            <div class="row  light grey lighten-5 center " style="padding: 2%; border-radius: 4px;">
              <h5><?= $o['judul']; ?></h5>
              <p><?= $o['isi']; ?></p>
            </div>
            <?php endforeach; ?>
            <?php foreach ($sejarah as $s) : ?>
             <div class=" light grey lighten-5 " style="padding: 2%; border-radius: 4px;"">
                <p><?= $s['isi']; ?></p>
            </div>        
          <?php endforeach; ?>

    </div>
</div>