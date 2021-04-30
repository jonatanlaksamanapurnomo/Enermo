# Dokumentasi Enermo Web App

## Deskripsi
Dokumentasi ini dapat digunakan oleh pembaca sebagai panduan untuk melakukan installasi, konfigurasi, menjalankan aplikasi dan _deployment_ dari aplikasi web Enermo.

## Instalasi
Aplikasi ini menggunakan sebuah _tool_ untuk mengatur _dependency_ di PHP bernama Composer ([Pelajari Lebih Lanjut](https://getcomposer.org/doc/00-intro.md)). Buka _terminal_ dengan mengarahkan ke direktori aplikasi, contoh direktori :```D:\Kadosoft\enermo>``` , kemudian masukkan perintah berikut ini pada terminal :
```bash
$ composer install
```
Pastikan Composer sudah terinstall di komputer Anda.

## Konfigurasi
### _Enviroment Variable_
_Copy_ file ```.env.example``` dan ubah nama file tersebut menjadi ```.env```. Anda dapat menambahkan _enviroment_ aplikasi anda pada file ```.env```. Adapun contoh pengunaan ```.env``` adalah sebagai berikut :
```env
APP_NAME= ----NAMA APLIKASI----
APP_ENV= ----ENVIROMENT APLIKASI----
APP_URL=----URL APLIKASI----
.
.
.
DB_CONNECTION=mysql
DB_HOST=----IP ADDRESS DATABASE----
DB_PORT=----PORT DATABASE----
DB_DATABASE=----NAMA DATABASE----
DB_USERNAME=----USERNAME DATABASE----
DB_PASSWORD=----PASSWORD DATABASE----
```

###  _Application Key_
Anda dapat men-_generate application key_ dengan menjalakan perintah berikut pada terminal : 
```bash
php artisan key:generate
```
Secara otomatis variable ```APP_KEY``` pada _file_ ```.env``` akan diisi dengan string acak dengan panjang 32 karakter. ([Application Key](https://laravel.com/docs/7.x#configuration))

## Menjalakan Aplikasi Pada _Local Host Development_
Untuk menjalankan aplikasi pada _local host development_, anda dapat menuliskan perintah berikut pada terminal :
```bash
php artisan serve
```
Pastikan database MySQL sudah berjalan, sebelum menjalankan aplikasi ini.


