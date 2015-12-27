<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>smandagra - Admin</title>
		<meta name="description" content="Responsive Multi-Level Menu: Space-saving drop-down menu with subtle effects" />
		<meta name="keywords" content="multi-level menu, mobile menu, responsive, space-saving, drop-down menu, css, jquery" />
		<meta name="author" content="Codrops" />

		
		<link rel="stylesheet" type="text/css" href="../style/component.css" />
		<link rel="stylesheet" type="text/css" href="../plugin/jvmobilemenu/jv-jquery-mobile-menu.css">        
    <link rel="stylesheet" type="text/css" href="../plugin/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../plugin/datatables-responsive/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="../plugin/datetimepicker-master/jquery.datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" href="../style/form.css" />
    <link rel="stylesheet" type="text/css" href="../style/default.css" />
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
     <!-- Core CSS File. The CSS code needed to make eventCalendar works -->
    <link rel="stylesheet" href="../lib/eventCalendar.css">

    <!-- Theme CSS file: it makes eventCalendar nicer -->
    <link rel="stylesheet" href="../lib/eventCalendar_theme_responsive.css">

        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>-->

    <script src="../lib/jquery.min.js"></script>
    <script src="../lib/modernizr.custom.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.dlmenu.js"></script>
    <script src="../plugin/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../plugin/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../plugin/datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
    <script src="../plugin/ckeditor/ckeditor.js" type="text/javascript"></script>
	</head>
	<body>
		<!-- MENU START -->
    <?php
    include 'inc-db.php';
    
    if($_SESSION['level']=='ADMIN'){
    
    ?>
		<div class="main">
            <div id="dl-menu" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                  	<li>
                      	<a href="index.html">Beranda</a>
                  	</li>
                  	<li>
                      	<a href="#">Manajemen Data Master</a>
                      	<ul class="dl-submenu">
                          	<li><a href="?page=admin.data">Data Admin</a></li>
                          	<li><a href="?page=guru.data">Data Guru</a></li>
                          	<li><a href="?page=siswa.data">Data Siswa</a></li>
                          	<li><a href="?page=kelas.data">Data Kelas</a></li>
                          	<li><a href="?page=matapelajaran.data">Data Mata Pelajaran</a></li>
                          	<li><a href="?page=tahun_ajaran.data">Data Tahun Ajaran</a></li>
                      	</ul>
                  	</li>
                  	<li>
                      	<a href="#">Manajemen Halaman Web</a>
                      	<ul class="dl-submenu">
                          	<li><a href="?page=berita.data">Berita</a></li>
                          	<li>
                              	<a href="#">Sambutan</a>
                              	<ul class="dl-submenu">
                                  	<li><a href="?page=sambutan.sambutan_kepala_sekolah">Sambutan Kepala sekolah</a></li>
                                  	<li><a href="?page=sambutan.sambutan_guru">Sambutan Guru</a></li>
                                  	<li><a href="?page=sambutan.sambutan_siswa">Sambutan Siswa</a></li>
                              	</ul>
                          	</li>
                          	<li><a href="?page=kurikulum.data">Kurikulum</a></li>
                          	<li><a href="?page=kontak.data">Kontak</a></li>
                          	<li>
                              	<a href="#">Tentang Kami</a>
                              	<ul class="dl-submenu">
                                  	<li><a href="?page=tentang_kami.tujuan_visi_misi">Tujuan, Visi &amp; Misi</a></li>
                                  	<li><a href="?page=tentang_kami.sejarah">Sejarah</a></li>
                                  	<li><a href="?page=tentang_kami.daftar_guru">Daftar Guru</a></li>
                              	</ul>
                          	</li>
                          	<li><a href="?page=gambar_slide.data">Gambar Slide</a></li>
                          	<li><a href="?page=kalender_kegiatan.data">Kalender Kegiatan</a></li>
                      	</ul>
                  	</li>
                  	<li>
                      	<a href="#">Manajemen e-Learning</a>
                      	<ul class="dl-submenu">
                          	<li><a href="?page=materi.data">Materi</a></li>
                          	<li><a href="?page=tugas_online.data">Tugas Online</a></li>
                          	<li><a href="?page=nilai.data">Nilai</a></li>
                      	</ul>
                  	</li>
              	</ul>
          	</div><!-- /dl-menuwrapper -->

          	<div class="mobile-nav">
              <h3><?php echo $_SESSION['nama']; ?></h3>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Pengaturan</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
    	</div>
        
        <?php
        }else if($_SESSION['level']=='GURU'){
        ?>
        	<div class="main">
	        <div id="dl-menu" class="dl-menuwrapper">
	            <button class="dl-trigger">Open Menu</button>
	            <ul class="dl-menu">
	                <li> <a href="admin_area.php">Beranda</a> </li>
	                <li> <a href="?page=materi.data">Materi</a> </li>
	                <li> <a href="?page=tugas_online.data">Tugas Online</a> </li>
	                <li> <a href="?page=nilai.data">Laporan Nilai</a> </li>
	                <li> <a href="#">Kelas</a> </li>
	            </ul>
	        </div><!-- /dl-menuwrapper -->

	        <div class="mobile-nav">
	            <h3><?PHP echo $_SESSION['nama'];?></h3>
	            <ul>
	                <li><a href="#">Profil</a></li>
	                <li><a href="#">Pengaturan</a></li>
	                <li><a href="logout.php">Logout</a></li>
	            </ul>
	        </div>
	    </div>
        
        <?php
        }else{
        ?>
        		
		<div class="main">
            <div id="dl-menu" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                  	<li>
                      	<a href="admin-area.php">Beranda</a>
                  	</li>
                  	<li>
                      	<a href="?page=materi.data">Materi</a>
                  	</li>
                  	<li>
                      	<a href="?page=tugas_online.data">Tugas Online</a>
                  	</li>
                  	<li>
                      	<a href="?page=nilai.data_nilai_siswa">Nilai</a>
                  	</li>
              	</ul>
          	</div><!-- /dl-menuwrapper -->

          	<div class="mobile-nav">
              <h3><?php echo $_SESSION['nama']; ?></h3>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Pengaturan</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
    	</div>
        <?php
        }
        ?>
     <!-- MENU END -->
            
    	<div class="clearfix"> </div>

		<div class="container">	

			<header>
	        
	            <h1><a href="index.html" style="color:#515151">SMA N 2 GRABAG MAGELANG</a></h1>
	            <h4>Jalan Raya Grabag 46, Kalikuto, Grabag, Magelang </h4>

	        </header>

        	<hr>

			<div class="content">
          	 <?php
              if(isset($_GET['page']) && strlen($_GET['page']) > 0){
                $page=str_replace(".","/",$_GET['page']).".html";
                }else {
            	$page="welcome.php";	
                }
                if(file_exists("modul/".$page)){
            	include("modul/".$page);	
                }else{
                include("modul/welcome.php");
             }
            ?>
              
              
      </div>

		</div> <!-- /.container -->


		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu();
			});
		</script>

		<script>
		    $(document).ready(function() {
		        $('#dataTables-example').DataTable({
		                responsive: true
		        });
		    });
		</script>

		<script>
			//config
			$float_speed=1500; //milliseconds
			$float_easing="easeOutQuint";
			$menu_fade_speed=500; //milliseconds
			$page_load_fade_delay=2000; //milliseconds
			$closed_menu_opacity=0.75;

			//cache vars
			$fl_menu=$(".dl-menuwrapper");
			$fl_menu_menu=$(".dl-menuwrapper .dl-menu ");
			$fl_menu_label=$(".dl-menuwrapper .dl-trigger");
			$fl_menu_item=$(".dl-menu");

			$(window).load(function() {
				menuPosition=$fl_menu.position().top;
				FloatMenu();
				$fl_menu_item.delay($page_load_fade_delay).fadeTo($menu_fade_speed, 0, function(){$fl_menu_item.css("display","none");});
				$fl_menu.hover(
					function(){ //mouse over
						$fl_menu_label.stop().fadeTo($menu_fade_speed, 1);
						$fl_menu_item.css("display","block").stop().fadeTo($menu_fade_speed, 1);
					},
					function(){ //mouse out
						$fl_menu_label.stop().fadeTo($menu_fade_speed, $closed_menu_opacity, function(){$fl_menu_item.css("display","none");});
						$fl_menu_item.stop().fadeTo($menu_fade_speed, 0);
					}
				);
			});

			$(window).scroll(function () { 
				FloatMenu();
			});

			function FloatMenu(){
				var scrollAmount=$(document).scrollTop();
				var newPosition=menuPosition+scrollAmount;
				if($(window).height()<$fl_menu.height()+$fl_menu_menu.height()){
					$fl_menu.css("top",menuPosition);
				} else {
					$fl_menu.stop().animate({top: newPosition}, $float_speed, $float_easing);
				}
			}
		</script>
		

		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

		<script src="../lib/tweenmax.min.js"></script>

		<script src="../plugin/jvmobilemenu/jv-jquery-mobile-menu-min.js"></script>
		  
		<script src="../js/script-right.js"></script>

    <script src="../js/jquery.eventCalendar.js" type="text/javascript"></script>

	</body>

</html>