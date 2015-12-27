 <?php

//echo "JANCUK";
 
	$setting =[
				//untuk mengatur aplikasi
				'name' 	 => 'e-Learning SMA N 2 Grabag',
				'alamat' => 'Jl. Raya Grabag 46 Kalikuto, Grabag, Magelang',


				'time'   => 'Asia/Jakarta',	

				//koneksi database
				'host'   => 'localhost',
				'user'	 => 'root',
				'pass'	 => '',
				'db' 	 => 'elearning'
			  ];
	
    // looping array $ard untuk menjadikan key array sebagai variabel define
    // dan value array sebagai nilai dari variabel
    foreach ($setting as $_keydata => $_valdata) {
        define($_keydata, $_valdata);
    }



    // mengatur timezone
    date_default_timezone_set(time);

    // koneksi ke'database
    @mysql_connect(host,user,pass) or die ("Koneksi Gagal!!!");
    @mysql_select_db(db) or die ("Database tidak ditemukan!!!");