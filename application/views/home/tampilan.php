  <!-- slider -->
  <div class="slider">
    <ul class="slides">
       <?php foreach ($artikel as $a) : ?>
      <li>
         <a href="Artikel/getArtikel/<?= $a['id']; ?>"><img src="<?php echo base_url(); ?>gambar/artikel/<?= $a['gambar']; ?>" width="300" height="300"></a>
          <div class="caption center-align">
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>


  <!--profil  -->
  <!-- <section id="about" class="about scrollspy"> 
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">Profil</h3>

        <?php foreach ($sejarah as $s) : ?>
          <div class="justify">
            <p><?= $s['isi']; ?></p>
          <?php endforeach; ?>

          <?php foreach ($visi as $v) : ?>
            <div class="col m6 light">
              <h5><?= $v['judul']; ?></h5>
              <p><?= $v['isi']; ?></p>
            <?php endforeach; ?>

            <?php foreach ($misi as $m) : ?>
              <h5><?= $m['judul']; ?></h5>
              <p><?= $m['isi']; ?></p>
            <?php endforeach; ?>

            <?php foreach ($moto as $o) : ?>
              <h5><?= $o['judul']; ?></h5>
              <p><?= $o['isi']; ?></p>
            <?php endforeach; ?>
</div>
          <div class="col m6 light">
            <?php foreach ($pemeriksaan as $p) : ?>
              <p><?= $p['isi']; ?></p>
            <?php endforeach; ?>

            <?php foreach ($pelayanan as $e) : ?>

              <p><?= $e['isi']; ?></p>
            <?php endforeach; ?>

          </div>
        </div>


  </section>-->


  <!-- Dokter -->

  <!-- <section id="dokter" class="services grey lighten-2 scrollspy"> 
    <div class="continer">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Dokter</h3>
        <?php foreach ($dokter as $d) : ?>
          <div class="col m4 s12">
            <div class="card-panel center">
              <h5><?= $d['nama']; ?></h5>

              <img src="<?php echo base_url(); ?>gambar/dokter/<?= $d['foto']; ?>" width="200">
              <p><?= substr($d['keterangan'], 0); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>-->


  <!-- Berita -->
   <section id="services" class="white"> 
    <div class="continer">
      <div class="row">
        <h3 class="light center black-text text-darken-3 bold">Berita & Artikel</h3>
        <?php foreach ($artikel as $a) : ?>
          <div class="col m4 s12">
            <div class="card hoverable">
              <div class="card-image">
                <img src="<?php echo base_url(); ?>gambar/artikel/<?= $a['gambar']; ?>" class="center" width="300" height="300">
              </div>
              <div class="card-content">
                <h5 class="pink-text text-lighten-1 bold"><?= $a['judul']; ?></h5>
                <p><?= substr($a['deskripsi'], 0, 100); ?>....</p>
              </div>
              <div class="card-action gradient">
                <a href="Artikel/getArtikel/<?= $a['id']; ?> ">Read More</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Structure -->

  <!-- <section id="promo" class="promo grey lighten-2 scrollspy"> 
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Struktur</h3>
      <div class="row">

        <div class="card-panel center">

          <img src="assets/img/struktur/struktur.png" width="" class="center">

        </div>


      </div>
    </div>
  </section>-->


  <!-- Album -->

  <section id="portfolio" class="portfolio scrollspy white"> 
    <div class="container">
      <div class="row">
        <h3 class="light center black-text text-darken-3 bold">Album</h3>
          <?php 
          $no = 1;
          foreach ($album as $a) :
            if($no == 1) :
            ?>
          <?php endif; ?>
            <div class="col m3 s12">
              <div class="card hoverable">
                <div class="card-image">
                  <img src="<?= base_url('gambar/album/' . $a['nama_file']); ?>" alt="<?= $a['nama']; ?>" class="responsive-img materialboxed" style="height: 25%;">
            </div>
              </div>
                </div>
          <?php
            $no++;
            
          endforeach; 
          ?> 
      <!-- </div> -->
      <!-- <div class="row"> -->
    </div>
  </section>