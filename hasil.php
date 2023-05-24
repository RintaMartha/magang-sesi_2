<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="style.css">
			<title> time</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
		<!--
		body {
			background-color: whitesmoke;
			background-image: url(bg.jpg);
		}

		.style1 {font-size: 24px}
		-->
		</style>
        
    </head>

    <hr>
    <audio id="alarm-audio" src="path_to_audio_file.mp3" preload="auto"></audio>
<button onclick="setAlarm()">Set Alarm</button>

    <hr>

    <div>
        <label for="input-number">Masukkan angka (1-7):</label>
        <input type="number" id="input-number" min="1" max="7">
        <button onclick="getDayName()">Dapatkan Nama Hari</button>
    </div>


    <br>

    <center> 

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Hari</th>
            <th>Waktu</th>
            <th>Aksi</th> 

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM senin";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['hari']."</td>";
            echo "<td>".$siswa['waktu']."</td>";
        
            echo "<td>";
            echo "<a href='editdata.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>


    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </center>
    </body>
</html>