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
                  <li class='last'><a href='#'><span>Kurikulum</span></a></li>
                  <li class='last'><a href='#'><span>Kontak</span></a></li>
                  <li class='has-sub'><a href='#'><span>Tentang Kami</span></a>
                      <ul>
                            <li><a href='#'><span>Visi, Misi &amp; Tujuan</span></a></li>
                            <li><a href='sejarah.php'><span>Sejarah</span></a></li>
                      </ul>
                  </li>
                  <li class='last'><a href='admin/index.php'><span>e-Learning</span></a></li>
              </ul>
          </div>
      </header>
      
      <div id="latest">

        <section class="left-col"> 

          <div class="font-size"><b>Kurikulum</b></div><br/>

          
        </section>

        <div class="clearfix"> </div>

        <div class="content">
        
        <?php 

          $query  = mysql_query('select * from Kurikulum where publish = "Ya"');
          $result = mysql_fetch_assoc($query);

          echo($result ['isi_kurikulum']);
        ?>

          <div class="clearfix"> </div>

          <a href="files/<?php echo $result['file']; ?>" target="_blank">Silahkan downlod disini.</a>
          
        </div>

      <hr />

      <footer>
         <p>&copy; 2015 - Ghufron Edi Wibowo</p>
      </footer>      
      
   </div> <!-- #wrapper -->

</body>

</html>