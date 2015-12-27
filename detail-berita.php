<?php  
include('inc_db.php');
//exit;
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Smandagra</title>

   <!-- CSS -->
   <link rel="stylesheet" href="style/menu.css">
   <link rel="stylesheet" href="style/style.css">
   <link rel="stylesheet" href="lib/eventCalendar.css">
   <link rel="stylesheet" href="lib/eventCalendar_theme_responsive.css">
   <!-- /. CSS -->

   <!-- Javascript -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <script src="lib/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   <script src="js/carousel.js"></script>
   <!-- /.Javascript -->

</head>

<body>
  
   <div id="wrapper">
      
      <header>
          <h1><a href="index.html">SMA N 2 GRABAG MAGELANG</a></h1>
          <h4>Jalan Raya Grabag 46, Kalikuto, Grabag, Magelang </h4><br>

          <div id='cssmenu'>
              <ul>
                  <li class='active'><a href='index.php'><span>Beranda</span></a></li>
                  <li class='last'><a href='kurikulum.php'><span>Kurikulum</span></a></li>
                  <li class='last'><a href='kontak.php'><span>Kontak</span></a></li>
                  <li class='has-sub'><a href='#'><span>Tentang Kami</span></a>
                      <ul>
                          <li><a href='visi-misi.php'><span>Visi, Misi &amp; Tujuan</span></a></li>
                          <li><a href='sejarah.php'><span>Sejarah</span></a></li>
                      </ul>
                  </li>
                  <li class='last'><a href='admin/index.php'><span>e-Learning</span></a></li>
              </ul>
          </div>
      </header>

      <br>

      <section id="main-content">
           <div id="content" class="cf">
              <div id='carousel-container'>
                  <div id='nav-carousel-left'><a href='javascript:slide("left");'>&#171;</a></div>
                  <div id='carousel'>
                      <ul>
                      <?php 
                        $sql_slide="select * from gambar_slide where id_album='1'";
                        $result_slide=mysql_query($sql_slide);
                        while($data_slide=mysql_fetch_assoc($result_slide)){
                      //for($i=0;$i<=6;$i++){
                      ?>
                          <li>
                              <div class="carousel-thumb">
                                  <a href="" title="subhanallah" rel="nofollow"><img src="images/<?php echo $data_slide['gambar'];  ?>"/></a>
                              </div>
                          </li><!--.col-->  
                      <?php
                      }
                      ?>    
                      </ul>
                  </div>
                  <div id='nav-carousel-right'><a href='javascript:slide("right");'>&#187;</a></div>
                  <input type='hidden' id='hidden_auto_slide_seconds' value=0 />
              </div>
         </div> <!--#content -->
         
         <hr/>
         
         <div id="latest">

              <section class="left-col">
                  <div class="font-size"><b>Berita</b></div><br/>
                  <?php
                      
                      $id = $_GET['id'];
                      $sql_berita ="SELECT *
                                    FROM
                                        `elearning`.`pengguna`
                                        INNER JOIN `elearning`.`berita` 
                                            ON (`pengguna`.`id_pengguna` = `berita`.`id_pengguna`) where id_berita='".$id."'";
                      
                      $result_berita=mysql_query($sql_berita);
                      $data_berita=mysql_fetch_array($result_berita);
                          
                  ?>
                  <h3><?php echo $data_berita['judul_berita']; ?> <span style="font-size:10px"><?php echo date_format( date_create( $data_berita['tanggal_publish'] ) , 'd-m-Y H:i:s') ;?> oleh <?php echo $data_berita['nama']; ?></span> </h3> 
                  <p>
                  <img src="images/<?php echo $data_berita['gambar']; ?>" height="300" width="400"/>
                  
                  <br />
                  <?php echo $data_berita['isi_berita']; ?>
                  </p> <br/>
                  
              </section> 

              <aside class="sidebar">
                  <?php
                      
                      $sql_sambutan="select * from sambutan where id_sambutan='1'";
                      $result_sambutan=mysql_query($sql_sambutan);
                      while($data_sambutan=mysql_fetch_array($result_sambutan)){
                  
                  ?>
                  
                     <div class="well-sambutan">
                        <h4>Kepala Sekolah</h4>
                        <hr>
                        <center>
                           <img class="thumbnail img-responsive-potrait" src="images/<?php echo $data_sambutan['foto_sambutan'];  ?>">
                        </center>
                        <p> <?php echo $data_sambutan['sambutan']; ?> </p>
                     </div>
                    
                  <?php
                  
                  }
                    
                      $sql_sambutan        = "select * from sambutan where id_sambutan='2'";
                      $result_sambutan     = mysql_query($sql_sambutan);
                      while($data_sambutan = mysql_fetch_array($result_sambutan)){
                  
                  ?>
                      
                      <div class="well-sambutan">
                          <h4>Guru</h4>
                          <hr>
                          <center>
                             <img class="thumbnail img-responsive-potrait" src="images/<?php echo $data_sambutan['foto_sambutan'];  ?>">
                          </center>
                          <p> <?php echo $data_sambutan['sambutan']; ?> </p>
                       </div>
                  <?php
                  
                  }
                  
                      $sql_sambutan        = "select * from sambutan where id_sambutan='3'";
                      $result_sambutan     = mysql_query($sql_sambutan);
                      
                      while($data_sambutan = mysql_fetch_array($result_sambutan)){
                  
                  ?>
                      
                      <div class="well-sambutan">
                          <h4>Siswa</h4>
                          <hr>
                          <center>
                             <img class="thumbnail img-responsive-potrait" src="images/<?php echo $data_sambutan['foto_sambutan'];  ?>">
                          </center>
                          <p> <?php echo $data_sambutan['sambutan']; ?> </p>
                      </div>
                  <?php
                      
                  }
                      
                  ?>          
             </aside>

             <div class="clearfix"></div>
             
             <hr/>
             
             <div id="about">
                  <div class="font-size"><b>Kalender Kegiatan</b></div><br/>
               
                      <div id="eventCalendarHumanDate"></div>
                    
                  <div class="clearfix"></div>

             </div> <!-- #about --> 

      </section> <!-- #main-content -->

      <hr/>

      <footer>
         <p>&copy; 2015 - Ghufron Edi Wibowo</p>
      </footer>      
      
   </div> <!-- #wrapper -->

   <script>
        $(document).ready(function() {
            $("#eventCalendarHumanDate").eventCalendar({
                eventsjson: 'json/json.php',
                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
            });
        });
    </script>

    <script src="js/jquery.eventCalendar.js" type="text/javascript"></script>
   
</body>

</html>