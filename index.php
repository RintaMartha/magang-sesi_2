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
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Pengaturan</title>
        <link rel="stylesheet" href="index.css">
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
            var audio = [
                new Audio('Bel/01.mp3'),
                new Audio('Bel/02.mp3'),
                new Audio('Bel/03.mp3'),
                new Audio('Bel/04.mp3'),
                new Audio('Bel/05.mp3'),
                new Audio('Bel/06.mp3'),
                new Audio('Bel/07.mp3'),
                new Audio('Bel/08.mp3'),
                new Audio('Bel/09.mp3'),
                new Audio('Bel/010.mp3'),
                new Audio('Bel/011.mp3'),
                new Audio('Bel/012.mp3'),
                new Audio('Bel/013.mp3'),
                new Audio('Bel/014.mp3')
            ];
            var isReloaded = false;
            var isUpacara = <?php echo $upacara; ?>;

            function customClock() {
                var time = new Date();
                var hrs = time.getHours();
                var min = time.getMinutes();
                var sec = time.getSeconds();
                var milsec = time.getMilliseconds();
                var thisDay = '<?php echo $hariIni; ?>';

                if (isUpacara == 0) {
                    if (thisDay !== 'Jum&#39;at') {
                        var jadwal = [
                            ["07:00", "07:44", 0],
                            ["07:45", "08:29", 1],
                            ["08:30", "09:14", 2],
                            ["09:15", "09:59", 3],
                            ["10:00", "10:59", 4],
                            ["11:00", "11:44", 5],
                            ["12:15", "12:59", 6],
                            ["13:00", "13:44", 7],
                            ["13:45", "14:29", 8],
                            ["14:21", "15:15", 9],
                            ["00:06", "00:07", 10]
                        ];
                    } else {
                        var jadwal = [
                            ["07:00", "07:34", 0],
                            ["07:35", "08:09", 1],
                            ["08:10", "08:44", 2],
                            ["08:45", "09:19", 3],
                            ["09:35", "10:09", 4],
                            ["10:10", "10:44", 5],
                            ["10:45", "12:19", 6],
                            ["11:20", "11:55", 7],
                            ["12:50", "13:24", 8],
                            ["13:25", "14:00", 9]
                        ];
                    }
                } else {
                    var jadwal = [
                        ["07:00", "07:39", "upacara"],
                        ["07:40", "08:19", 1],
                        ["08:20", "08:59", 2],
                        ["09:00", "09:39", 3],
                        ["09:55", "10:34", 4],
                        ["10:35", "11:14", 5],
                        ["11:15", "11:54", 6],
                        ["12:35", "13:14", 7],
                        ["13:15", "13:54", 8],
                        ["13:55", "14:34", 9],
                        ["14:35", "15:15", 10]
                    ];
                }

                for (var i = 0; i < jadwal.length; i++) {
                    var jadwalPelajaran = jadwal[i];
                    var start = jadwalPelajaran[0].split(":");
                    var end = jadwalPelajaran[1].split(":");
                    var audioIndex = jadwalPelajaran[2];

                    if (
                        hrs == start[0] &&
                        min == start[1] &&
                        sec == 0 &&
                        hrs < end[0] &&
                        min < end[1] &&
                        sec < 60 &&
                        !isReloaded
                    ) {
                        location.reload();
                        isReloaded = true;
                        audio[audioIndex].play();
                        break;
                    }
                }

                document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
            }
</script>

<?php
                if ($upacara == 0) {
                    $jadwalSeninKamis = [
                        ["07:00", "07:44", "1"],
                        ["07:45", "08:29", "2"],
                        ["08:30", "09:14", "3"],
                        ["09:15", "09:59", "4"],
                        ["10:00", "10:59", "5"],
                        ["11:00", "11:44", "6"],
                        ["12:15", "12:59", "7"],
                        ["13:00", "13:44", "8"],
                        ["13:45", "14:29", "9"],
                        ["14:21", "15:15", "10"],
                        ["23:57", "23:59", '11']
                    ];

                    $jadwalJumat = [
                        ["07:00", "07:34", "1"],
                        ["07:35", "08:09", "2"],
                        ["08:10", "08:44", "3"],
                        ["08:45", "09:19", "4"],
                        ["09:35", "10:09", "5"],
                        ["10:10", "10:44", "6"],
                        ["10:45", "12:19", "7"],
                        ["11:20", "11:55", "8"],
                        ["12:50", "13:24", "9"],
                        ["13:25", "14:00", "10"]
                    ];

                    $jadwalUpacara = [
                        ["07:00", "07:39", "upacara"],
                        ["07:40", "08:19", "1"],
                        ["08:20", "08:59", "2"],
                        ["09:00", "09:39", "3"],
                        ["09:55", "10:34", "4"],
                        ["10:35", "11:14", "5"],
                        ["11:15", "11:54", "6"],
                        ["12:35", "13:14", "7"],
                        ["13:15", "13:54", "8"],
                        ["13:55", "14:34", "9"],
                        ["14:35", "15:15", "10"]
                    ];

                    $current_time = date("H:i");

                    $jadwal = ($hariIni != "Friday") ? $jadwalSeninKamis : $jadwalJumat;
                    
                    foreach ($jadwal as $jadwalPelajaran) {
                        list($start, $end, $pelajaran) = $jadwalPelajaran;
                        $current_time = date("H:i"); // Perbarui waktu saat ini dalam setiap iterasi
                    
                        if ($current_time >= $start && $current_time <= $end) {
                            $sql = "UPDATE alarm SET pelajaran = '$pelajaran' WHERE id = 1";
                            $update = mysqli_query($db, $sql);
                            break;
                        }
                    }
                    
                } else {
                    $jadwalUpacara = [
                        ["07:00", "07:39", "upacara"],
                        ["07:40", "08:19", "1"],
                        ["08:20", "08:59", "2"],
                        ["09:00", "09:39", "3"],
                        ["09:55", "10:34", "4"],
                        ["10:35", "11:14", "5"],
                        ["11:15", "11:54", "6"],
                        ["12:35", "13:14", "7"],
                        ["13:15", "13:54", "8"],
                        ["13:55", "14:34", "9"],
                        ["14:35", "15:15", "10"]
                    ];

                    $current_time = date("H:i");

                    foreach ($jadwalUpacara as $jadwalPelajaran) {
                        list($start, $end, $pelajaran) = $jadwalPelajaran;
                        if ($current_time >= $start && $current_time <= $end) {
                            $sql = "UPDATE alarm SET pelajaran = '$pelajaran' WHERE id = 1";
                            $update = mysqli_query($db, $sql);
                            break;
                        }
                    }
                }

                $select = "SELECT `pelajaran` FROM `alarm` WHERE id=1";
                $result = mysqli_query($db, $select);
                $row = mysqli_fetch_assoc($result);
                $pelajaran = $row['pelajaran'];
                echo "Sekarang Pelajaran ke: " . $pelajaran . " ";
                echo "<br>"; 
                if($upacara == 0) {
                    echo "Sekarang Bukan Upacara";
                } else {
                    echo "Sekarang Upacara";
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