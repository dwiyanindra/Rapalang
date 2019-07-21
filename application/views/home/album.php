<section id="portfolio" class="portfolio scrollspy white"> 
    <div class="container">
      <h3 class="light center black-text text-darken-3 bold">Album</h3>
        <?php 
          $no = 1;
          foreach ($album as $a) :
            if($no == 1) :
        ?>
          <div class="row">
          <?php endif; ?>
            <div class="col m3 s12">
              <img src="<?= base_url('gambar/album/' . $a['nama_file']); ?>" alt="<?= $a['nama']; ?>" class="responsive-img materialboxed" style="height: 25%;">
            </div>
          <?php
            $no++;
            
          endforeach; 
          ?> 
      <!-- </div> -->
      <!-- <div class="row"> -->
    </div>
  </section>