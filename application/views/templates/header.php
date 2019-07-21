 <html>

 <head>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="<?= base_url();   ?>assets/css/materialize.min.css" media="screen,projection" />

   <!-- my css -->
   
   <link rel="stylesheet" href="<?= base_url();   ?>assets/css/style.css">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
   <style type="text/css">
     html,body {
      font-family: 'Muli', sans-serif;
     }

     .bold {
      font-weight: bold;
     }
     .gradient{
      background:linear-gradient(to red,blue);
      background: -webkit-linear-gradient(left,red,blue);
      background: -o-linear-gradient(right,red,blue);
      background: -moz-linear-gradient(right,red,blue);
     }
     .gradient1{
      background:linear-gradient(to blue,red);
      background: -webkit-linear-gradient(left,blue,red);
      background: -o-linear-gradient(right,blue,red);
      background: -moz-linear-gradient(right,blue,red);
    }
   </style>
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Waskhita Laboratorium</title>
 </head>

 <body id="home" class="scrollspy">



   <!-- navbar -->

   <div class="navbar-fixed">
     <nav class="gradient">
       <div class="container">
         <div class="nav-wrapper">

          
           <a href="<?= base_url('home'); ?>" class="brand-logo"><img src="<?php echo base_url(); ?>gambar/album/logo1.png" style="width: 60px;height: 60px"></a>
           <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">           

            



             <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
             <li class="dropdown">
              <a href="#!" data-target="dropdown1" class="dropdown-trigger" >Profil</a>
             </li>
             <li><a href="<?= base_url('Home/dokter'); ?>">Dokter</a></li>
             <li><a href="<?= base_url('Home/berita'); ?>">Berita & Artikel</a></li>
             <li><a href="<?= base_url('Home/album'); ?>">Album</a></li>
              <li><a href="<?= base_url('Home/login'); ?>">Unduh</a></li>
           </ul>
         
         </div>
       </div>
     </nav>
   </div>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?= base_url('Home/visi'); ?>">Sejarah</a></li>
  <li class="divider"></li>
  <li><a href="<?= base_url('Home/fasilitas'); ?>">Fasilitas</a></li>
</ul>


<ul id="dropdown2" class="dropdown-content">
  <li><a href="<?= base_url('Home/visi'); ?>">Sejarah</a></li>
  <li class="divider"></li>
  <li><a href="<?= base_url('Home/fasilitas'); ?>">Fasilitas</a></li>
</ul>
   <!-- sidenav -->
   <ul class="sidenav" id="mobile-nav">
     <li><a href="<?= base_url('home'); ?>">Beranda</a></li>
     <li class="dropdown"><a href="#!" data-target="dropdown2" class="dropdown-trigger1">Profil</a></li>
     <li><a href="<?= base_url('Home/dokter'); ?>">Dokter</a></li>
     <li><a href="<?= base_url('Home/berita'); ?>">Berita & artikal</a></li>
     <li><a href="<?= base_url('Home/album'); ?>">Album</a></li>
     <li><a href="<?= base_url('Home/login'); ?>">Unduh</a></li>
   </ul>