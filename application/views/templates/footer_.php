 
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
     });
   </script>
   </body>

   </html>