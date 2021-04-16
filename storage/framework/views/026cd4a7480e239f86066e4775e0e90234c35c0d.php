
 
<html lang="en-US" dir="ltr" class="chrome windows"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Sistem Informasi Beasiswa | IT Del</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="<?php echo e(asset('template/')); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('template/')); ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('template/')); ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('template/')); ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('template/')); ?>/dist/css/skins/_all-skins.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="msapplication-TileImage" content="img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css">
	
	li.dropdown {
		display: inline-flexbox;
	}
  .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: fixed;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color:tr;
	}
 
	.isi-dropdown a {
		color: #3c3c3c !important;
	}
    .btn {
        background-color: transparent;
        border: solid #e74c3c;
        border-radius: 0.6em;
        color: #e74c3c;
        cursor: pointer;
        align-self: center;
        font-size: 5px;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        position: fixed;
    }
    .btn:hover, .btn:focus {
        color: #fff;
        outline: 0;
    }

.first {
  transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
}
.first:hover {
  box-shadow: 0 0 10px 10px #e74c3c inset;
}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}
</style>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    
    <link href="css/theme.css" rel="stylesheet">

    <link href="swiper/swiper-bundle.min.css" rel="stylesheet">
  </head>


  <body data-bs-spy="scroll" data-bs-target="#navbar">
    
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
      <?php if(session('pesan')): ?>
        <div class="alert alert-success  alert-dismissible">
          <center>
          <h4><i class="icon fa fa-check">Success</i></h4>
          <?php echo e(session('pesan')); ?>.
          </center>
        </div>
    <?php endif; ?>
    <main class="main" id="top">
      <nav class="navbar navbar-expand-xl navbar-light fixed-top px-0 pb-0 mb-2" id="navbar" data-navbar-darken-on-scroll="white" style="padding-top: 0px; background-image: none; border-bottom: none; transition: none 0s ease 0s;">
        <div class="container-fluid align-items-center py-2"><a class="navbar-brand flex-center" href="index.html"><img class="logo" src="img/logo.png" alt="Logo Del" style="height: 80px;"><span class="ms-2 d-none d-sm-block fw-bold">Sistem Informasi<br>Beasiswa IT Del</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-3 mt-xl-0">
              <li class="nav-item ps-0 ps-xl-4 ms-2"><a class="nav-link fs-2 fw-medium active" href="#beasiswa">Beasiswa </a></li>
              <li class="nav-item ps-0 ps-xl-4 ms-2"><a class="nav-link fs-2 fw-medium" href="#features">Pendaftaran </a></li>
              <li class="nav-item ps-0 ps-xl-4 ms-2"><a class="nav-link fs-2 fw-medium" href="#contribute">Tentang </a></li>
              <li class="nav-item ps-0 ps-xl-4 ms-2"><a class="nav-link fs-2 fw-medium" href="#rea">Kontak </a></li>
              
              
              <li class="nav-item ps-0 ps-xl-4 ms-2 dropdown"><a class="nav-link fs-2 fw-medium" href="#"><?php echo e(Auth::user()->name); ?> </a>
            <ul class="isi-dropdown">
			<li>
                
                <a class="nav-link " href="<?php echo e(route('profile.show')); ?>">Profil</a></li>
			<li >
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                      <?php echo csrf_field(); ?>
                      <button type="submit" class="btn btn-default btn-flat">Log out</button>
                  </form>
                </li>
			
			
		</ul></li>
              
            </ul>
          </div>
        </div>
      </nav>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-8 py-lg-0">

        <div class="container-xxl" style="margin-top: 30px;">
          <div class="row align-items-center min-vh-lg-100"  style="background-color: #5a8676; ">
            <div  class="col-lg order-lg-1 text-center"><img class="img-fluid" src="img/illustrations/student.png" alt=""></div>
            <div class="col-lg mt-5 mt-lg-0">
              <h1 class="lh-sm font-cursive fw-medium fs-6 fs-sm-8 fs-md-11 fs-lg-9 fs-xl-11 fs-xxl-12"><div>Sistem Informasi Beasiswa <br class="d.none d-xl-block"> Institut Teknologi Del</div></h1>
              <p class="mt-4 fs-2 fs-md-4 lh-sm"style="color: #ffffff;">Membantu anda untuk menemukan beasiswa yang akan membantu anda dalam pendidikan.</p>
              <!-- <button class="btn btn-success mt-4">Request early access</button> -->
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-xxl-0"  id="beasiswa">

        <div class="container-xxl">
          <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-xl-8">
              <h1 class="display-6 font-cursive">Beasiswa</h1>
              
                  </div>
                </div>
                <table class="table table-bordered" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Pemberi Beasiswa</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1 ?>
                        <?php $__currentLoopData = $beasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr> 
                            <td><?php echo e($data->nama_beasiswa); ?></td>
                            <td><?php echo e($data->pemberi_beasiswa); ?></td>
                          <td>
                            <a href="/home/detailbeasiswa/<?php echo e($data->id_beasiswa); ?>" >Detail</a>
                            
                            
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>

                </div>
      </section>
      </section>
      <section id="rea">

        <div class="container-xxl">
          <div class="row align-items-center">
          <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-xl-8">
              <h1 class="display-6 font-cursive">Pengumuman</h1>
            </div>
          </div>

            
          <div>
            <a href="/home/add">add</a>
  <table class="table table-bordered" style="border-collapse:collapse;">
    <thead>
        <tr>
            <th>Title</th>
            <th>Time</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr> 
            <td><?php echo e($data->judul_peng); ?></td>
            <td><?php echo e($data->time_peng); ?></td>
           <td>
             <a href="/home/detail/<?php echo e($data->id_peng); ?>" >Detail</a>
             <a href="/home/edit/<?php echo e($data->id_peng); ?>" >Edit</a>
             <a href="/home/delete/<?php echo e($data->id_peng); ?>">Delete</a>
             
           </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>

<?php echo e(Auth::user()); ?>

          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-4">

        
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <section class="py-4"  style="background-color: #5A8676;" id="footer">

        <div class="container-xxl">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 text-sm-center text-lg-start">
              <p class="mb-lg-0" style="color : #ffffff">Institut Teknologi Del <br>
                Jl. Sisingamangaraja, Sitoluama <br>
                Laguboti, Toba Samosir <br>
                Sumatera Utara, Indonesia <br>
                Kode Pos: 22381</p>
            </div>
            <div class="col-lg-4 text-sm-center text-lg-start">
              <p class="mb-lg-0" style="color : #ffffff">Website: http://www.del.ac.id <br>
                Email: info@del.ac.id <br>
                Karir: karir@del.ac.id</p>
            </div>
            <div class="col-lg-4 text-sm-center text-lg-start">
              <p class="mb-lg-0" style="color : #ffffff">Telp: +62 632 331234 <br>
                Fax: +62 632 331116</p>
            </div>
            <div class="col-lg-4 text-sm-center text-lg-end">
              <p class="mb-0" style="color : #ffffff">© Sistem Informasi Beasiswa IT Del 2021</a></p>
            </div>
          </div>
        </div>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"> </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="js/theme.js"></script>

    <!-- jQuery 3 -->
<script src="<?php echo e(asset('template/')); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('template/')); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo e(asset('template/')); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('template/')); ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('template/')); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template/')); ?>/dist/js/demo.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Roboto:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet">
  

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lataa\as\ab\belajar-laravel\belajar-laravel\resources\views/v_home.blade.php ENDPATH**/ ?>