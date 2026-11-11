# GD6_2992

## Catatan artisan serve dan composer run dev

Modul ini cukup memakai php artisan serve karena project ini berjalan di server lokal.

## Cara Menjalankan Proyek TiketWar
1. Nyalakan Apache dan MySQL di XAMPP, lalu buat database `tiketwar` di phpMyAdmin.
2. Dari folder repository, masuk ke folder proyek: `cd tiketwar`
3. `composer install`
4. Salin `.env.example` menjadi `.env` (macOS/Linux: `cp .env.example .env`, Windows:
`copy .env.example .env`).
5. Ubah bagian DB_ di `.env` sesuai bab 4, lalu `php artisan key:generate`
6. `php artisan migrate:fresh --seed`
7. `php artisan serve`

## Jawaban Latihan Debugging

1. Koneksi ditolak:
   Error terjadi karena MySQL belum aktif atau konfigurasi koneksi tidak sesuai. Jadi, periksa status MySQL di XAMPP, lalu pastikan host dan port pada .env sudah benar.
2. Model belum punya $fillable:
   Error terjadi karena atribut belum didaftarkan dalam $fillable. Solusinya adalah menambahkan atribut yang diperlukan. Jika kolom tanggal tidak didaftarkan, nilainya dapat diabaikan saat penyimpanan sehingga data menjadi tidak lengkap atau muncul error.
3. 419 Page Expired:
   Error terjadi karena form tidak menyertakan token CSRF. Solusinya adalah menambahkan @csrf pada form.
4. 405 Method Not Allowed:
   Error terjadi karena form mengirim POST, sedangkan route membutuhkan PUT. Solusinya adalah menambahkan @method('PUT') pada form edit.

## Jawaban Pertanyaan Seeder

Jumlah data tetap 3 promotor dan 5 konser karena migrate:fresh menghapus tabel beserta data sebelumnya, lalu membuatnya kembali. Setelah itu, --seed mengisi ulang data yang sama, sehingga jumlahnya tidak bertambah.
