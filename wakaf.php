<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="style/wakaf.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Wakaf Al-Manar</title>
    </head>

    <body>
        <div class="navbar">
            <h3 >Al-Manar</h3>
            <nav class="menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="">Zakat</a></li>
                    <li><a href="">Infaq</a></li>
                    <li><a href="/sedekah">Sedekah</a></li>
                    <li><a href="/wakaf">Wakaf</a></li>
                    <li>
                        <a href="/login"><img src="media/icon-person.png" alt="" style="width: 35px;height: 35px;"> Masuk</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="header">
            <h1 class="header Judul1">WAKAF</h1>
            <p class="header isi">Mulai tabungan akhirat dengan Amal 
                Jariah anda melalui Wakaf untuk pembangunan masjid dan pembangunan Sekolah.</p>
            <img src="media/image-removebg-preview (7) 1.png" alt="Memberi Tanam">
        </div>
        <div class="form">
            <p class="judul2">Ayo mulai wakaf</p>
            <div>
                <div class="tipe">
                    <p>Tipe Wakaf</p>
                    <div class="tipe-wakaf">
                        <select name="tipe-wakaf" id="" class="tipe-wakaf">
                            <ul class="isi-tipe-wakaf">
                                <option value="">Wakaf Diam</option>
                                <option value="">Wakaf Bergerak</option>
                            </ul>
                        </select>
                    </div>
                </div>
                <div class="jenis">
                    <p>Jenis Wakaf</p>
                    <div class="jenis-wakaf">
                        <select name="jenis-wakaf" id="" class="jenis-wakaf">
                            <ul class="isi-jenis-wakaf">
                                <option value="">Uang Tunai</option>
                                <option value="">Saham</option>
                                <option value="">HAKI</option>
                                <option value="">Surat Berharga</option>
                                <option value="">Logam Mulia</option>
                                <option value="">Transportasi</option>
                            </ul>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="laporan">LAPORAN WAKAF</h1>
        <div class="report-count">
            <div class="col1">
                <img src="media/Meeting.png" alt="Penerima Manfaat">
                <h5>35.168.832</h5>
                <h4>Penerima Manfaat</h4>
            </div>
            <div class="col2">
                <img src="media/Trust.png" alt="Dana Terkumpul">
                <h5>Rp. {{$dana}},- </h5>
                <h4>Dana Terkumpul</h4>
            </div>
            <div class="col3">
                <img src="media/Receive Cash.png" alt="Dana Tersalurkan">
                <h5>Rp. 705.325.000,-</h5>
                <h4>Dana Tersalurkan</h4>
            </div>
            <div class="col4">
                <img src="media/Crowd.png" alt="Donatur">
                <h5>{{$donatur}}</h5>
                <h4>Donatur</h4>
            </div>
        </div>

        
        <div class="program">
            <h1 class="judul">PROGRAM WAKAF</h1>
            <div class="container-program">
                <div class="kotak-program program1">
                    <div class="gambar program1"></div>
                    <div class="kotak-text program1">
                        <h1 class="nama-program"></h1>
                    </div>
                </div>
                <div class="kotak-program program2">

                </div>
                <div class="kotak-program program3">

                </div>
            </div>
            
        </div>
        
        <div class="news">

        </div>
    </body>
</html>