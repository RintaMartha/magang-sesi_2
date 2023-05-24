function setAlarm() {
    var alarmTime = document.getElementById("alarm-time").value; // Ambil waktu alarm dari input
    var currentTime = new Date().toLocaleTimeString(); // Ambil waktu saat ini
    
    if (currentTime >= alarmTime) {
      playAlarm();
    } else {
      var timeDifference = new Date(alarmTime) - new Date(currentTime);
      setTimeout(playAlarm, timeDifference);
    }
  }
  
  function playAlarm() {
    var alarmAudio = document.getElementById("alarm-audio");
    alarmAudio.play();
  }
  