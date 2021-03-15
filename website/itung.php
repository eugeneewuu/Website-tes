
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All About Mobile Legends</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>

    <!-- loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!-- header -->
    </div>
    <header>
        <div class="container">
            <h1><a href="index.html">All About Mobile Legends </a></h1>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="news.html">NEWS</a></li>
                <li><a href="teams.html">TEAMS</a></li>
                <li><a href="support.html">SUPPORT</a></li>
                <li class="active"><a href="itung.php">ARITMATIKA</a></li>
                <li><a href="fibo.php">FIBONACCI</a></li>
            </ul>
        </div>
    </header>
    <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / Aritmatika</p>
        </div>
    </section>
    <form method="GET" action="">
    nilai a : <input type="text" name="a"><br><br>
    nilai b : <input type="text" name="b"><br><br>
    operasi : <br>
        <input type="radio" name="operasi" value="tambah"> penjumblahan<br>
        <input type="radio" name="operasi" value="kurang"> pengurangan<br>
        <input type="radio" name="operasi" value="kali"> perkalian<br>
        <input type="radio" name="operasi" value="bagi"> pembagian<br>

        <input type="submit" name="proses" value="hitung"> <br>
</form>

<?php

         if(isset($_GET['proses'])){

            $a = $_GET['a'];
            $b = $_GET['b'];
            $operasi = $_GET['operasi'];

            echo"Nilai a = $a = <br>
                 Nilai b = $b";

            if($operasi=="tambah"){
                $c = $a + $b;
                echo"Penjumblahan $a + $b = $c";
            }

            elseif($operasi=="kurang"){
                $c = $a - $b;
                echo"Pengurangan $a - $b = $c";
            }
            elseif($operasi=="kali"){
                $c = $a * $b; 
                echo"Perkalian $a * $b = $c";
            }
            elseif($operasi=="bagi"){
                $c = $a / $b;
                echo"Pembagian $a / $b = $c";
            }
            else{
                echo"Anda belum mengisikan / memilih operasi";
            }
         }
?>

    
 <!-- footer -->
 <footer>
        <div class="container">
            <div>
                <img src="images/mnt.png" style="width: 100p;height:100px;">
                <div>
                    <small> Supported by Moonton.</small>
                </div>
    </footer>





</body>
