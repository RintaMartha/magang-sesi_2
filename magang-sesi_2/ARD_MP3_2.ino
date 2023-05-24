//DFPLAYER MINI MP3-TF-16P MP3 PLAYER 
//Source Code memutar file tertentu
//PLAY dengan memanggil nama file mp3

#include <SoftwareSerial.h>    //memanggil library SoftwareSerial
#include <DFPlayer_Mini_Mp3.h> //memanggil library DFPlayer mini

SoftwareSerial mySerial(3, 2); // Declare pin RX & TX
//TX DF Player disambung ke pin D3
//RX DF Player disambung ke pin D2 (melalui R1-4.7kK)

const int busyPin =4;


void setup () { 
 pinMode (busyPin, INPUT);
 
 mySerial.begin (9600);
 
 mp3_set_serial (mySerial); //set softwareSerial for DFPlayer
 delay(10);
 
 mp3_reset();  //soft-Reset module DFPlayer
 
 delay(10);   //wait 1ms for respon command
 
 mp3_set_volume (15); //set Volume module DFPlayer, bisa diatur hingga maksimal 25
 delay(1000);
}

void loop () {   
mp3_play (1); //Play mp3 0001.mp3 dalam folder mp3 di memory
delay (10000);
mp3_play (2); //Play mp3 0002.mp3 dalam folder mp3 di memory
delay (9000);
mp3_play (3); //Play mp3 0003.mp3 dalam folder mp3 di memory
delay (11000);
mp3_play (4); //Play mp3 0004.mp3 dalam folder mp3 di memory
delay (11000);
// setelah play 0004.mp selesai akan kembali ke baris awal pada void loop, yaitu play 0001.mp3
}

------------------------------------------------------
//Source Code untuk memutar semua file secara berurutan.
//DFPLAYER MINI MP3-TF-16P MP3 PLAYER ahmadzipur.com
//PLAY ALL dengan delay 15 detik

#include <SoftwareSerial.h>    //memanggil library SoftwareSerial
#include <DFPlayer_Mini_Mp3.h> //memanggil library DFPlayer mini

SoftwareSerial mySerial(3, 2); // Declare pin TX & RX
//TX DF Player disambungkan ke pin D3
//RX DF Player disambungkan ke pin D2 (melalui R 1k-4.7k)

const int busyPin =4;


void setup () { 
 pinMode (busyPin, INPUT);
 
 mySerial.begin (9600);
 
 mp3_set_serial (mySerial); //set softwareSerial for DFPlayer
 delay(10);
 
 mp3_reset();  //soft-Reset module DFPlayer
 
 delay(10);   //wait 1ms for respon command
 
 mp3_set_volume (80); //set Volume module DFPlayer
 delay(1000);
}
void loop () {   
mp3_play (1); //Play mp3 0001.mp3 dalam folder mp3 di memory

//memainkan file berikutnya jika lagu sebelumnya sudah selesai
if( busyPin == HIGH ){ mp3_next (); } 

//memainkan file 0001.mp3 s/d 0010.mp3 selama 15detik/file secara berurutan
for (int i=1; i<=10; i++){  
   mp3_play (i);
   delay(15000);
}

}
