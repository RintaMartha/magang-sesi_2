<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Pengaturan</title>
        <link rel="stylesheet" href="pengaturan.css">
    </head>
<style>
    body {
        background-color:#d6eaf2 ;
    }
</style>
    <body>
        <div class="pengaturan">
                <center>
                    <img src="logo sekolah.png" width="115" height="150" />
            <h1>
            <br />
                    HALAMAN PENGATURAN<br />
                    RUNNING TEXT<br />
            </h1>
        <hr />
                </center>
        </div>
        <div class="tanggal">
                <script type='text/javascript'>
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                    document.write(thisDay + ', ' + day + ' ');
                </script>           
        </div>   
        <!-----------BEL--------------->
        <p id="clock"></p>
            <script>
                setInterval(customClock, 500);
                function customClock() {
                    var time = new Date();
                    var hrs = time.getHours();
                    var min = time.getMinutes();
                    var sec = time.getSeconds();
                    var count = 0;
                    var audio1 = new Audio('feel.mp3');
                    var audio2 = new Audio('Bel/02.wav');
                    var audio3 = new Audio('Bel/03.wav');
                    var audio4 = new Audio('Bel/04.wav');
                    var audio5 = new Audio('Bel/05.wav');
                    var audio6 = new Audio('Bel/06.wav');
                    var audio7 = new Audio('Bel/07.wav');
                    var audio8 = new Audio('Bel/08.wav');
                    var audio9 = new Audio('Bel/09.wav');
                    var audio10 = new Audio('Bel/010.wav');
                    var audio11 = new Audio('Bel/011.wav'); //start in 5mnt
                    var audio12 = new Audio('Bel/012.wav'); //breaktime empty in 5 mnt
                    var audio13 = new Audio('Bel/013.wav'); //breaktime
                    var audio14 = new Audio('Bel/014.wav'); //pulang
  
                    if(hrs == 21 && min == 39){
                        //count=count+1;
                        audio1.play();
                        

                    }
                    else if (hrs == 13 && min == 47){
                        audio2.play();

                    }
                    else if (hrs == 21 && min == 13){
                        audio3.play();
                        
                    }
                    else if (hrs == 7 && min == 54 && sec==1){
                        audio4.play();
                        
                    }
                    else if (hrs == 21 && min == 18 && sec== 1){
                        audio5.play();
                        
                    }
                    else if (hrs == 17 && min == 1 && sec==1){
                        audio6.play();
                        
                    }
                    else if (hrs == 17 && min == 2 && sec==1){
                        audio7.play();
                        
                    }
                    else if (hrs == 5 && min == 57 && sec==30){
                        audio8.play();
                        
                    }
                    else if (hrs == 17 && min == 5 && sec==1){
                        audio9.play();
                        
                    }
                    else if (hrs == 15 && min == 30 && sec==1){
                        audio10.play();
                        
                    }
                    else if (hrs == 17 && min == 6 && sec==2){
                        audio11.play();
                        
                    }
                    else if (hrs == 15 && min == 30 && sec==1){
                        audio12.play();
                        
                    }
                    else if (hrs == 15 && min == 30 && sec==1){
                        audio13.play();
                        
                    }
                    else if (hrs == 15 && min == 30 && sec==1){
                        audio14.play();
                        
                    }

                    document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
                }
            </script>
           <!-- <?php
                    // include "config.php";
                    // date_default_timezone_set('Asia/Jakarta');
                    // $current_time = date('H:i:s');
                    // echo $current_time;  
    
                    //     if($current_time == "22:10:00") {
                    //  $sql = "UPDATE alarm SET pelajaran = 2 WHERE id = 1";
                    // if(mysqli_query($conn, $sql)) {
                    //      echo "Data berhasil diperbarui";
                    // } else {
                    //     echo "Terjadi kesalahan: " . mysqli_error($conn);
                    //     }
                    // }
            ?> -->
 <?php
    include "config.php";
    date_default_timezone_set('Asia/Jakarta');
    $current_time = date('H:i');
    $hariIni = date('l');


        if($hariIni != "Friday") {// kondisi untuk hari senin-kamis  
            if ($current_time == "22:45") {
                $sql = "UPDATE alarm SET pelajaran = 6 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "7:45") {
                $sql = "UPDATE alarm SET pelajaran = 2 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
        }//akhir kondisi untuk hari senin-kamis
        else{//kondisi untuk hari jumat


        }
        
        $select = "SELECT `pelajaran` FROM `alarm` WHERE id=1";
        $result = mysqli_query($db, $select);
        $row = mysqli_fetch_assoc($result);
        $pelajaran = $row['pelajaran'];
        echo "Sekarang Pelajaran ke: " . $pelajaran;
    ?>

            <!------------------------------->
            <div class="bannerled">
                <div class="font">
                <marquee direction="left">
                    <p id="pesan"></p>
                </marquee> 
                <script>
                    let waktu = new Date().getHours();
                    let menit = new Date().getMinutes();
                    let detik = new Date().getSeconds(); //tidak perlu, hanya mencoba
                    let ucapan;

                    if (waktu == 13 && menit == 47){
                        ucapan = "Halo";
                    }else if (waktu == 20 && menit == 59){
                        ucapan = "Terimakasih atas kerja keras anda!";
                        
                    }else{
                        ucapan = "Pelajaran ke -"
                    }
                    
                    document.getElementById("pesan").innerHTML = ucapan;

                </script>
              </div>  
            </div>
            
        </center>
    </body>
    
</html>