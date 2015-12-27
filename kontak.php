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

          <div class="font-size"><b>Kontak</b></div><br/>

             <body onload="load()" onunload="GUnload()">
            <div id="map"></div>
        </section>
        
        <aside class="sidebar">
            <h3>Detail Kontak</h3>

                <?php
                  $query  = mysql_query('select * from kontak');
                  $result = mysql_fetch_assoc($query); 
                ?>
                <p> <?php echo($result['alamat']); ?><br> </p>
                <p>  <abbr title="Phone">P</abbr>: <?php echo($result['telepon'])?> </p>
                <p>  <abbr title="Email">E</abbr>: <?php echo($result['email'])?> </p>
                <p> 
                    <a href="<?php echo($result['facebook'])?>" target="_blank"><img src="images/facebook.png" style="width: 30px; height=30px "></a> &nbsp;
                    <a href=""><img src="images/twitter.png" style="width: 30px; height=30px "></a>
                </p>
        </aside>

      <div class="clearfix"></div>

      <hr />

      <footer>
         <p>&copy; 2015 - Ghufron Edi Wibowo</p>
      </footer>      
      
   </div> <!-- #wrapper -->

   <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAA8G9ZUehlmgHFYSk0eHkvMxSMGSzrQzuxP9i0yI8OwKXwu_vyNhQuc40vTW0co5ModYSrK6lCkwof0Q" type="text/javascript"></script>



                <script type="text/javascript">
                //<![CDATA[

                var iconBlue = new GIcon();
                iconBlue.image = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
                iconBlue.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
                iconBlue.iconSize = new GSize(12, 20);
                iconBlue.shadowSize = new GSize(22, 20);
                iconBlue.iconAnchor = new GPoint(6, 20);
                iconBlue.infoWindowAnchor = new GPoint(5, 1);

                var iconRed = new GIcon();
                iconRed.image = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
                iconRed.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
                iconRed.iconSize = new GSize(12, 20);
                iconRed.shadowSize = new GSize(22, 20);
                iconRed.iconAnchor = new GPoint(6, 20);
                iconRed.infoWindowAnchor = new GPoint(5, 1);

                var customIcons = [];
                customIcons["wisata"] = iconBlue;
                customIcons["museum"] = iconRed;

                function load() {
                  if (GBrowserIsCompatible()) {
                    var map = new GMap2(document.getElementById("map"));
                    map.addControl(new GSmallMapControl());
                    map.addControl(new GMapTypeControl());
                    map.setCenter(new GLatLng(-7.805708, 110.364113), 13);

                    GDownloadUrl("map.php", function(data) {
                      var xml = GXml.parse(data);
                      var markers = xml.documentElement.getElementsByTagName("marker");
                      for (var i = 0; i < markers.length; i++) {
                        var nama = markers[i].getAttribute("nama");
                        var alamat = markers[i].getAttribute("alamat");
                        var tipe = markers[i].getAttribute("tipe");
                        var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
                                                parseFloat(markers[i].getAttribute("lng")));
                        var marker = createMarker(point, nama, alamat, tipe);
                        map.addOverlay(marker);
                      }
                    });
                  }
                }

                function createMarker(point, nama, alamat, tipe) {
                  var marker = new GMarker(point, customIcons[tipe]);
                  var html = "<b>" + nama + "</b> <br/>" + alamat;
                  GEvent.addListener(marker, 'click', function() {
                    marker.openInfoWindowHtml(html);
                  });
                  return marker;
                }
                //]]>
            </script>
   
</body>

</html>