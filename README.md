## RESPONSI PBO POKECARE  BELLSPROUT

DATA DIRI
NAMA  : Mohammad Zulfan Ramadhan
NIM   : H1H024008
SHIFT AWAL  : A
SHIFT AKHIR : D

## Penjelasan singkat kode dan aplikasi:

Aplikasi ini adalah sebuah sistem simulasi berbasis web yang menunjukkan: 
    -informasi dasar pokemon yang dilatih (tipe, level, hp, Jurus)
    -jenis pelatihan yang dapat dilakukan
    -efek setiap pelatihan
    -Riwayat sesi latihan yang pernah dilakukan
    
a. Pokemon.php (Class Abstrak)
⦁	Merupakan class induk yang berisi:
⦁	Properti private (name, type, hp, level, specialMove) menerapkan Encapsulation
⦁	Method getter dan setter
⦁	Method abstrak specialMove() → menerapkan Abstraction
⦁	Method train() untuk memproses perubahan level dan HP Pokémon

b. Bellsprout.php (Class Turunan)
⦁	Meng-extend class Pokemon → Inheritance
⦁	Mengisi data: tipe Grass/Poison, level awal, HP awal, jurus Vine Whip
⦁	Override method specialMove() → Polymorphism

2. Halaman Utama (index.php)
Menampilkan:
⦁	Nama Pokémon
⦁	Gambar Bellsprout
⦁	Tipe, level, HP
⦁	Jurus spesial
⦁	Tombol menuju halaman latihan & riwayat
Session digunakan untuk menyimpan objek Pokémon sehingga data level & HP tidak hilang saat berpindah halaman.

3. Halaman Latihan (train.php)
Fitur:
⦁	Form untuk memilih jenis latihan (Attack, Defense, Speed)
⦁	Input intensitas
⦁	Proses latihan memanggil train() dan specialMove()
⦁	Menampilkan hasil perubahan level dan HP
⦁	Mencatat riwayat ke dalam session

4. Halaman Riwayat (history.php)
⦁	Menampilkan seluruh sesi latihan:
⦁	Jenis latihan
⦁	Intensitas
⦁	Level sebelum & sesudah
⦁	HP sebelum & sesudah
⦁	Timestamp
⦁	Data riwayat disimpan dalam $_SESSION["history"].

5. style.css
Mengatur tampilan:
⦁	Card layout
⦁	Tombol navigasi
⦁	Gambar Pokémon
⦁	Layout responsif sederhana

##Cara Menjalankan Aplikasi
1. Pastikan laragon sudah diaktifkan
2. Buka browser lalu masuk ke localhost dan folder dimana program disimpan
   (http://localhost/Mohammad%20Zulfan%20Ramadhan_H1H024008_ResponsiPBO25/index.php)
3. Setelah masuk, aplikasi siap digunakan
4. Pada halaman depan bisa terlihat informasi dasar mengenai pokemon nya
5. Terdapat pilihan menu mulai latihan dan riwayata latihan
6. Pencet tombol Mulai Latihan, untuk melakukan latihan
7. Didalamnya dapat memilih jenis latihan yang mau dilakukan dan intensistas latihan yang mau
   dilakukan
8. Setelah memencet latihan, akan muncul hasil latihan
9. Pnecet Riwayat latihan untuk melihat semua hasil latihan yang telah dilakukan.
10. Pnecet tombol kembali untuk balik ke halaman depan.

## Demo Singkat
![ezgif com-gif-to-mp4-converter](https://github.com/user-attachments/assets/20237324-d658-42a9-a88e-6d43bd9ec7c9)
