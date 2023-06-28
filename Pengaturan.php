<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Pengaturan</title>
        <link rel="stylesheet" href="pengaturan.css">
        <script>
        // Mencegah resubmit form saat halaman diperbarui
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    </head>
<style>
   body {
        background-color:#d6eaf2 ;
    }
        /* Mengatur tampilan tombol */
        .button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    /* Mengatur tampilan input */
    .button input {
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Mengatur tampilan tombol Upacara */
    .button .upacara {
        background-color: green;
        color: white;
        margin-right: 10px;
    }

    /* Mengatur tampilan tombol Bukan Upacara */
    .button .cancel {
        background-color: red;
        color: white;
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
        <?php
        session_start();
        include "config.php";
        date_default_timezone_set('Asia/Jakarta');
        $current_time = date('H:i');
        $hariIni = date('l');
        $upacara = isset($_SESSION['upacara']) ? $_SESSION['upacara'] : 0;
        if (isset($_POST['upacara'])) {
            $upacara = 1;
        } else if (isset($_POST['cancel'])) {
            $upacara = 0;
        }
        $_SESSION['upacara'] = $upacara;
        ?>  
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
 <?php
        if ($upacara == 0) {
            if($hariIni != "Friday") {// kondisi untuk hari senin-kamis  
                if ($current_time == "13:30") {
                    $sql = "UPDATE alarm SET pelajaran = 1 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "7:45") {
                    $sql = "UPDATE alarm SET pelajaran = 2 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "8:30") {
                    $sql = "UPDATE alarm SET pelajaran = 3 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "13:38") {
                    $sql = "UPDATE alarm SET pelajaran = 4 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "10:15") {
                    $sql = "UPDATE alarm SET pelajaran = 5 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "11:00") {
                    $sql = "UPDATE alarm SET pelajaran = 6 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "12:15") {
                    $sql = "UPDATE alarm SET pelajaran = 7 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "13:00") {
                    $sql = "UPDATE alarm SET pelajaran = 8 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "13:45") {
                    $sql = "UPDATE alarm SET pelajaran = 9 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "14:30") {
                    $sql = "UPDATE alarm SET pelajaran = 10 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time == "15:15") {
                    $sql = "UPDATE alarm SET pelajaran = 11 WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
            }//akhir kondisi untuk hari senin-kamis
            else{//kondisi untuk hari jumat  
                    if ($current_time == "07:00") {
                        $sql = "UPDATE alarm SET pelajaran = 1 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "7:35") {
                        $sql = "UPDATE alarm SET pelajaran = 2 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "8:10") {
                        $sql = "UPDATE alarm SET pelajaran = 3 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "8:45") {
                        $sql = "UPDATE alarm SET pelajaran = 4 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "9:35") {
                        $sql = "UPDATE alarm SET pelajaran = 5 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "10:10") {
                        $sql = "UPDATE alarm SET pelajaran = 6 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "10:45") {
                        $sql = "UPDATE alarm SET pelajaran = 7 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "11:20") {
                        $sql = "UPDATE alarm SET pelajaran = 8 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "12:50") {
                        $sql = "UPDATE alarm SET pelajaran = 9 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "13:25") {
                        $sql = "UPDATE alarm SET pelajaran = 10 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                    else if ($current_time == "14:00") {
                        $sql = "UPDATE alarm SET pelajaran = 11 WHERE id = 1";
                        $update = mysqli_query($db, $sql);
                    }
                
            }//akhir kondisi untuk hari jumat
        }
        else{//kondisi untuk hari upacara
            if ($current_time == "07:00") {
                $sql = "UPDATE alarm SET pelajaran = 1 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "7:35") {
                $sql = "UPDATE alarm SET pelajaran = 2 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "8:10") {
                $sql = "UPDATE alarm SET pelajaran = 3 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "8:45") {
                $sql = "UPDATE alarm SET pelajaran = 4 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "9:35") {
                $sql = "UPDATE alarm SET pelajaran = 5 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "10:10") {
                $sql = "UPDATE alarm SET pelajaran = 6 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "10:45") {
                $sql = "UPDATE alarm SET pelajaran = 7 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "11:20") {
                $sql = "UPDATE alarm SET pelajaran = 8 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "12:50") {
                $sql = "UPDATE alarm SET pelajaran = 9 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "13:25") {
                $sql = "UPDATE alarm SET pelajaran = 10 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time == "14:00") {
                $sql = "UPDATE alarm SET pelajaran = 11 WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
        }    
        
                $select = "SELECT `pelajaran` FROM `alarm` WHERE id=1";
                $result = mysqli_query($db, $select);
                $row = mysqli_fetch_assoc($result);
                $pelajaran = $row['pelajaran'];
                echo "Sekarang Pelajaran ke: " . $pelajaran . " ";
                echo "<br>"; 
                if($upacara == 0) {
                    echo "sekarang tidak upacara";
                } else {
                    echo "sekarang upacara";
                }

    ?>

            <!------------------------------->
            <div class="bannerled">
                <div class="font">
                <marquee direction="left">
                    <p id="pesan"></p>
                </marquee> 
                <script>
                     let pelajaran = <?php echo $pelajaran ?>;
                    let waktu = new Date().getHours();
                    let menit = new Date().getMinutes();
                    let detik = new Date().getSeconds(); //tidak perlu, hanya mencoba
                    let ucapan;

                    if (waktu == 13 && menit == 47){
                        ucapan = "Halo";
                    }else if (waktu == 20 && menit == 59){
                        ucapan = "Terimakasih atas kerja keras anda!";
                        
                    }else{
                        ucapan = "Pelajaran ke - " + pelajaran;
                    }
                    
                    document.getElementById("pesan").innerHTML = ucapan;

                </script>
              </div>  
            </div>
      <div class="button">
            <form method="POST">
                <input class="upacara <?php if ($_SESSION['upacara'] == 1) echo 'active'; ?>" type="submit" value="Upacara" name="upacara">
                <input class="cancel <?php if ($_SESSION['upacara'] == 0) echo 'active'; ?>" type="submit" value="Bukan Upacara" name="cancel">
            </form>
        </div>
            
        </center>
    </body>
    
</html>