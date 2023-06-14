#include <DMD.h>
#include <TimerOne.h>
#include <Wire.h>
#include "PrayerTimes.h"
#define DISPLAYS_ACROSS 1
#define DISPLAYS_DOWN 1
#include <SPI.h>
DMD dmd(1, 1); //untuk mengatur jumlah panel yang kamu pakai
double times[sizeof(TimeName) / sizeof(char*)];
void ScanDMD()
{
  dmd.scanDisplayBySPI();
}

void setup() {
  Wire.begin();
  Timer1.initialize( 500 );
  Timer1.attachInterrupt( ScanDMD );
  dmd.clearScreen( true );

}
    void loop(){
     String Teks;
    Teks = " SMK NEGERI 9 SEMARANG  " ; ///tampilkan hari
    int kecepatan;
    kecepatan = 35;     //kecepatan runing teks
    int pj = Teks.length() + 1;
    char tampil[pj];
    Teks.toCharArray(tampil, pj);
    dmd.drawMarquee(tampil, pj,(32*DISPLAYS_ACROSS)-1, 1);
    
    long timer = millis();
    boolean ret = false;
    while (!ret) {
      if ((timer + kecepatan) < millis()) {
        ret = dmd.stepMarquee(-1, 0); ///dianimasikan baris 8 sampai 15, sampai kolom 0
        timer = millis();}
    }
}
