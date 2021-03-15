
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
                <li><a href="itung.php">ARITMATIKA</a></li>
                <li class="active"><a href="fibo.php">FIBONACCI</a></li>
            </ul>
        </div>
    </header>
    <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / Fibonacci</p>
        </div>
    </section>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <tittle>
 <h1>Deret Fibonacci</h1>
 </tittle>
 <link rel="stylesheet"href="./PHP/stylephp.css">
</head>
<body>
<form method="GET" action="">
 nilai a : <input type="text" name="a" placeholder="Masukkan Angka Pertama"><b
r><br>
 nilai b : <input type="text" name="b" placeholder="Masukkan Angka Kedua"><br>
<br>
 Deret yang diinginkan : <input type="text" name="deret" placeholder="Masukkan
Jumlah Deret"><br>
 <input type="submit" name="Hitung" value="Hitung"> <br>
</form><?php
 if(isset($_POST['Hitung'])){
 $x1 = $_POST['a'];
 $x2 = $_POST['b'];
 $deret = $_POST['deret'];
 echo '<br>';
 echo "Outputnya adalah : $x1 $x2";
 for($i = 1; $i <= $deret; $i++){
 $hasil = $x2 + $x1;
 echo "$hasil";
 $x1 = $x2; 
 $x2 = $hasil; 
 }
 }
 ?>
 </body>
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
