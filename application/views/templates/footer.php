   <!-- footer -->






   <section id="contact" class="contact black darken-2 scrollspy">
     <div class="container">
      <div class="">
                <div class="card-body p-0">
       <h3 class="light white-text text-darken-3 center bold">Contact us</h3>
       <div class="row">
         <div class="col m4 s12">
           <div class="">
             <h4 class="bold white-text">Alamat Kami</h4>
             <p class=" white-text text-ligten-3"><i class="fa fa-map-marker"></i> &nbsp; Jl. Melati Wetan no 45, Baciro Yogyakarta <p class="white-text"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Telp. 0274 – 633079 </P> </p>
             <p class=" white-text text-ligten-3"><i class="fa fa-phone"></i> &nbsp; Panji : 081804292027 (24 Jam)
              <p class="white-text"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ardian : 082220280776 </p> </p>
             <p class="white-text"><i class="fa fa-envelope"></i> email : waskithalab@gmail.com </p>


           </div>

         </div>

         <div class="row">
         <div class="col m4 s12">
           <div class="">
             <h4 class="white-text bold">Jam Pelayanan</h4>
             <p class="white-text">Senin – Jumat  : 07.30 sd 16.00</p>
             <p class="white-text">Sabtu          : 07.30 sd 13.30</p>
           </div>

         </div>


         <div class="col m4 s12">
           <form method="post" action="<?= base_url('home/contactus'); ?>">
             <h5 class="white-text bold">Tinggalkan Pesan Anda</h5>
             <div class="input-field">
               <input type="text" name="name" id="name" required class="validate white-text">
               <label class= "white-text" for="Name">Name</label>
             </div>
             <div class="input-field">
               <input type="email" name="email" id="email" class="validate white-text">
               <label class="white-text" for="email">Email</label>
             </div>
             <div class="input-field">
               <input class="white-text" type="Number" name="phone" id="phone">
               <label class="white-text" for="phone">Phone Number</label>
             </div>
             <div class="input-field">
               <textarea class="white-text" name="message" id="message" class="materialize-textarea"></textarea>
               <label class="white-text" for="message">&nbsp;&nbsp;Text</label>
             </div>
             <button type="submit" class="btn blue">send</button>
           </form>
         </div>
       </div>
     </div>
   </p>
 </div>
</div>
   </section>
   <footer class="gradient darken-2 white-text" style="padding-left: 2.5%; padding-right: 2.5%;">
    <div class="right hidden-xs">
      <b>Pemgembang</b> Rapalang
    </div>
      <strong>Copyright &copy; Waskhita Laboratorium </strong> 
   </footer>
   <!--JavaScript at end of body for optimized loading-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?= base_url();   ?>assets/js/materialize.min.js"></script>
   <script type="text/javascript" src="<?= base_url();   ?>assets/js/ckeditor/ckeditor.js"></script>
   <script>
     
     const sidenav = document.querySelectorAll('.sidenav');
     M.Sidenav.init(sidenav);

     const slider = document.querySelectorAll('.slider');
     M.Slider.init(slider, {
       indicators: false,
       height: 500,
       transition: 500,
       interval: 4000
     });

     const parallax = document.querySelectorAll('.parallax');
     M.Parallax.init(parallax);

     const materialbox = document.querySelectorAll('.materialboxed');
     M.Materialbox.init(materialbox);

     const scroll = document.querySelectorAll('.scrollspy');
     M.ScrollSpy.init(scroll, {
       scrollOffset: 50
     });

     $(document).ready(function(){
        $(".dropdown-trigger").dropdown({'coverTrigger' : false, 'hover' : true});
        $(".dropdown-trigger1").dropdown({'coverTrigger' : false, 'hover' : false});
     });
   </script>
   </body>

   </html>