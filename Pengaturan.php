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
                    var milsec = time.getMilliseconds();
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
                    var isReloaded = false;
                    var isUpacara = <?php echo $upacara; ?>;
                    
                    if (isUpacara == 0){ //ini bukan hari upacara
                        if(thisDay !== 'Jum&#39;at'){ //senin kamis
                            if (hrs == 7 && min > 0 && sec > 0 && hrs < 7 && min < 44 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio1.play();
                            }
                            else if (hrs == 7 && min > 45 && sec > 0 && hrs < 8 && min < 29 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio2.play();
                            }
                            else if (hrs == 8 && min > 30 && sec > 0 && hrs < 9 && min < 14 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio3.play();
                            }
                            else if (hrs == 9 && min > 15 && sec > 0 && hrs < 9 && min < 59 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio4.play();
                            }
                            else if (hrs == 10 && min > 15 && sec > 0 && hrs < 10 && min < 59 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio5.play();
                            }
                            else if (hrs == 11 && min > 0 && sec > 0 && hrs < 11 && min < 44 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio6.play();
                            }
                            else if (hrs == 12 && min > 15 && sec > 0 && hrs < 12 && min < 59 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio7.play();
                            }
                            else if (hrs == 13 && min > 0 && sec > 0 && hrs < 13 && min < 44 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio8.play();
                            }
                            else if (hrs == 13 && min > 45 && sec > 0 && hrs < 14 && min < 29 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio9.play();
                            }
                            else if (hrs == 14 && min > 30 && sec > 0 && hrs < 15 && min < 15 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio10.play();
                            }
                            
                            
                        } //akhir senin kamis
                        else{//kondisi ini berisikan jadwal khusus hari jumat
                            if (hrs == 7 && min > 0 && sec > 0 && hrs < 7 && min < 34 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio1.play();
                            }
                            else if (hrs == 7 && min > 35 && sec > 0 && hrs < 8 && min < 09 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio2.play();
                            }
                            else if (hrs == 8 && min > 10 && sec > 0 && hrs < 8 && min < 44 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio3.play();
                            }
                            else if (hrs == 8 && min > 45 && sec > 0 && hrs < 9 && min < 20 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio4.play();
                            }
                            else if (hrs == 9 && min > 35 && sec > 0 && hrs < 10 && min < 9 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio5.play();
                            }
                            else if (hrs == 10 && min > 10 && sec > 0 && hrs < 10 && min < 44 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio6.play();
                            }
                            else if (hrs == 10 && min > 45 && sec > 0 && hrs < 11 && min < 19 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio7.play();
                            }
                            else if (hrs == 11 && min > 20 && sec > 0 && hrs < 11 && min < 55 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio8.play();
                            }
                            else if (hrs == 12 && min > 50 && sec > 0 && hrs < 13 && min < 24 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio9.play();
                            }
                            else if (hrs == 13 && min > 25 && sec > 0 && hrs < 14 && min < 00 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio10.play();
                            }


                        }
                    }
                    else{//hari upacara
                        if (hrs == 7 && min > 0 && sec > 0 && hrs < 7 && min < 39 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio1.play();
                        }
                        else if (hrs == 8 && min > 20 && sec > 0 && hrs < 8 && min < 59 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio2.play();
                        }
                        else if (hrs == 9 && min > 00 && sec > 0 && hrs < 9 && min < 39 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio3.play();
                        }
                        else if (hrs == 9 && min > 55 && sec > 0 && hrs < 10 && min < 34 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio4.play();
                        }
                        else if (hrs == 10 && min > 35 && sec > 0 && hrs < 11 && min < 14 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio5.play();
                        }
                        else if (hrs == 11 && min > 15 && sec > 0 && hrs < 11 && min < 54 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio6.play();
                        }
                        else if (hrs == 12 && min > 35 && sec > 0 && hrs < 13 && min < 14 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio7.play();
                        }
                        else if (hrs == 13 && min > 15 && sec > 0 && hrs < 13 && min < 54 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio8.play();
                        }
                        else if (hrs == 13 && min > 55 && sec > 0 && hrs < 14 && min < 34 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio9.play();
                        }
                        else if (hrs == 14 && min > 35 && sec > 0 && hrs < 15 && min < 14 && sec < 60 && !isReloaded) {
                            location.reload();
                            isReloaded = true;
                            audio10.play(); 
                        }//hari upacara
                        

                    } //penutup hari upacara        

                    document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
                }
            </script>
<?php
        if ($upacara == 0) { //bukan upacara
            if($hariIni != "Friday") { //senin-kamis
                if ($current_time > "07:00" && $current_time < "07:44") {
                    $sql = "UPDATE alarm SET pelajaran = '1'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "07:45" && $current_time < "08:29") {
                    $sql = "UPDATE alarm SET pelajaran = '2'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "08:30" && $current_time < "09:14") {
                    $sql = "UPDATE alarm SET pelajaran = '3'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "09:15" && $current_time < "10:00") {
                    $sql = "UPDATE alarm SET pelajaran = '4'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "10:15" && $current_time < "10:59") {
                    $sql = "UPDATE alarm SET pelajaran = '5'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "11:00" && $current_time < "11:45") {
                    $sql = "UPDATE alarm SET pelajaran = '6'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "12:15" && $current_time < "12:59") {
                    $sql = "UPDATE alarm SET pelajaran = '7'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "13:00" && $current_time < "13:44") {
                    $sql = "UPDATE alarm SET pelajaran = '8'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "13:45" && $current_time < "14:29") {
                    $sql = "UPDATE alarm SET pelajaran = '9'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "14:30" && $current_time < "15:15") {
                    $sql = "UPDATE alarm SET pelajaran = '10'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                
            }//penutup senin-kamis
            else{//kondisi untuk hari jumat  
                if ($current_time > "07:00" && $current_time < "07:34") {
                    $sql = "UPDATE alarm SET pelajaran = '1'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "07:35" && $current_time < "08:09") {
                    $sql = "UPDATE alarm SET pelajaran = '2'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "08:10" && $current_time < "08:44") {
                    $sql = "UPDATE alarm SET pelajaran = '3'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "08:45" && $current_time < "09:19") {
                    $sql = "UPDATE alarm SET pelajaran = '4'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "09:35" && $current_time < "10:09") {
                    $sql = "UPDATE alarm SET pelajaran = '5'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "10:10" && $current_time < "10:44") {
                    $sql = "UPDATE alarm SET pelajaran = '6'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "10:45" && $current_time < "12:19") {
                    $sql = "UPDATE alarm SET pelajaran = '7'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "11:20" && $current_time < "11:55") {
                    $sql = "UPDATE alarm SET pelajaran = '8'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "12:50" && $current_time < "13:24") {
                    $sql = "UPDATE alarm SET pelajaran = '9'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                else if ($current_time > "13:25" && $current_time < "14:00") {
                    $sql = "UPDATE alarm SET pelajaran = '10'  WHERE id = 1";
                    $update = mysqli_query($db, $sql);
                }
                
            }//penutup hari jumat 
        }//penutup bukan hari upacara
        else{//kondisi untuk hari upacara
            if ($current_time > "07:00" && $current_time < "07:39") {
                $sql = "UPDATE alarm SET pelajaran = 'upacara'  WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "07:40" && $current_time < "08:19") {
                $sql = "UPDATE alarm SET pelajaran = '1' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            
            else if ($current_time > "08:20" && $current_time < "08:59") {
                $sql = "UPDATE alarm SET pelajaran = '2' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "09:00" && $current_time < "09:39") {
                $sql = "UPDATE alarm SET pelajaran = '3' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "09:55" && $current_time < "10:34") {
                $sql = "UPDATE alarm SET pelajaran = '4' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "10:35" && $current_time < "11:14") {
                $sql = "UPDATE alarm SET pelajaran = '5' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "11:15" && $current_time < "11:54") {
                $sql = "UPDATE alarm SET pelajaran = '6' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "12:35" && $current_time < "13:14") {
                $sql = "UPDATE alarm SET pelajaran = '7' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "13:15" && $current_time < "13:54") {
                $sql = "UPDATE alarm SET pelajaran = '8' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "13:55" && $current_time < "14:34") {
                $sql = "UPDATE alarm SET pelajaran = '9' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
            else if ($current_time > "14:35" && $current_time < "15:15") {
                $sql = "UPDATE alarm SET pelajaran = '10' WHERE id = 1";
                $update = mysqli_query($db, $sql);
            }
        }//penutup kondisi untuk hari upacara  
        
                $select = "SELECT `pelajaran` FROM `alarm` WHERE id=1";
                $result = mysqli_query($db, $select);
                $row = mysqli_fetch_assoc($result);
                $pelajaran = $row['pelajaran'];
                echo "Sekarang Pelajaran ke:aa " . $pelajaran . " ";
                echo "<br>"; 
                if($upacara == 0) {
                    echo "sekarang Bukan Upacara";
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
                    let pelajaran = '<?php echo $pelajaran ?>';
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