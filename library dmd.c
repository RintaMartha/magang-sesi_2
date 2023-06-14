 /*
    2  * Hak Cipta (C) 2012 Southern Storm Software, Pty Ltd.
    3  *
    4  * Izin dengan ini diberikan, tanpa biaya, kepada siapa pun yang memperoleh a
    5  * salinan perangkat lunak ini dan file dokumentasi terkait ("Perangkat Lunak"),
    6  * untuk menangani Perangkat Lunak tanpa batasan, termasuk tanpa batasan
    7  * hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, menerbitkan, mendistribusikan, mensublisensikan,
    8  * dan/atau menjual salinan Perangkat Lunak, dan untuk mengizinkan orang yang kepadanya
    9  * Perangkat lunak dilengkapi untuk melakukannya, tunduk pada ketentuan berikut:
   10  *
   11  * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan
   12  * di semua salinan atau sebagian besar dari Perangkat Lunak.
   13  *
   14  * PERANGKAT LUNAK DIBERIKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, TERSURAT
   15  * ATAU TERSIRAT, TERMASUK NAMUN TIDAK TERBATAS PADA JAMINAN DAPAT DIPERDAGANGKAN,
   16  * KESESUAIAN UNTUK TUJUAN TERTENTU DAN TANPA PELANGGARAN. DALAM HAL APAPUN AKAN
   17  * PENULIS ATAU PEMEGANG HAK CIPTA BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU LAINNYA
   18  * TANGGUNG JAWAB, BAIK DALAM TINDAKAN KONTRAK, KERUGIAN ATAU LAINNYA, YANG TIMBUL
   19  * DARI, KELUAR DARI ATAU SEHUBUNGAN DENGAN PERANGKAT LUNAK ATAU PENGGUNAAN ATAU LAINNYA
   20  * DEALING DALAM PERANGKAT LUNAK.
   21  */
   22 
   23  #ifndef DMD_h
   24 #tentukan DMD_h
   25 
   26  #sertakan "Bitmap.h"
   27 
 DMD kelas    28 : Bitmap publik 
   29  {
   30  umum :
   31      DMD eksplisit  ( int widthPanels = 1, int heightPanels = 1);
   32      ~DMD ();
   33 
   34      bool  doubleBuffer () const { return _doubleBuffer; }
   35      batal  setDoubleBuffer ( bool  doubleBuffer );
   36      batal  swapBuffer ();
   37      batal  swapBuffersAndCopy ();
   38 
   39      putaran batal  ( );
   40      batal  menyegarkan ();
   41 
   42      batal  mengaktifkanTimer1 ();
   43      batal  menonaktifkanTimer1 ();
   44 
   45      batal  mengaktifkanTimer2 ();
   46      batal  menonaktifkanTimer2 ();
   47 
   48      Warna statis  dariRGB (uint8_t r, uint8_t g, uint8_t b); 
   49 
   50  pribadi :
   51      // Nonaktifkan copy constructor dan operator=().
   52      DMD ( const  DMD &lainnya): Bitmap (lainnya) {}
   53      DMD &operator=( const  DMD &) { return * this ; }
   54 
   55      bool _doubleBuffer;
   56      fase uint8_t;
   57      uint8_t *fb0;
   58      uint8_t *fb1;
   59      uint8_t *displayfb;
   60      unsigned  long lastRefresh;
   61  };
   62 
   63  #endif