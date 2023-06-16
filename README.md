<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://github.com/naufal-yafi/spec-finder/blob/main/public/logo-type.svg" width="400">
  </a>
</p>

<p align="center">
  <a href='https://github.com/naufal-yafi/spec-finder/wiki'>
    <img src="https://img.shields.io/badge/Wiki-black?style=for-the-badge&logo=bookstack&logoColor=fafafa">
  </a>&nbsp;

  <a href='http://specfinder.rf.gd/'>
    <img src="https://img.shields.io/badge/Live Demo-green?style=for-the-badge">
  </a>
</p>

<p align="center">
  <a href="https://laravel.com/">
    <img src="https://img.shields.io/badge/laravel-v8.6.12-red">
  </a>

  <a href="https://getbootstrap.com/">
    <img src="https://img.shields.io/badge/bootstrap-v5.1.3-blue">
  </a>

  <a href="https://www.apachefriends.org/">
    <img src="https://img.shields.io/badge/xampp-v8.0.28-orange">
  </a>
  
  <a href="https://www.php.net/">
    <img src="https://img.shields.io/badge/php-v8.0.28-blue">
  </a>
  
  <a href="https://nodejs.org/en">
    <img src="https://img.shields.io/badge/node-v18.15.0-green">
  </a>
  
  <a href="https://www.npmjs.com/">
    <img src="https://img.shields.io/badge/npm-v9.5.0-red">
  </a>
  
  <a href="https://www.npmjs.com/">
    <img src="https://img.shields.io/badge/composer-v2.5.5-brown">
  </a>
</p>

<br>

#### 1. Tools yang harus dipersiapkan

<ul>
  <li>
    <a href="https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.0.28/xampp-windows-x64-8.0.28-0-VS16-installer.exe">XAMPP</a>
  </li>
  <li>
    <a href="https://getcomposer.org/Composer-Setup.exe">Composer</a>
  </li>
  <li>
    <a href="https://github.com/git-for-windows/git/releases/download/v2.41.0.windows.1/Git-2.41.0-64-bit.exe">GIT</a>
  </li>
</ul>

#### 2. Unduh repository

```sh
git clone https://github.com/naufal-yafi/spec-finder.git && cd spec-finder
```

#### 3. Unduh semua dependensi

```sh
composer install
```

#### 4. Buat database

Sebelumnya jalankan web server (<a href="">Apache</a> dan <a href="">MySQL</a>) menggunakan <a href="">XAMPP</a>. Setelah itu, jalankan perintah ini di command line, untuk membuat database baru.

```
mysql -u root -e "CREATE DATABASE <YOUR _DATABASE NAME>;" | exit
```

#### 5. Buat dan Konfigurasi .env

Bisa langsung mengubah nama file <a href="https://github.com/naufal-yafi/spec-finder/blob/main/.env.example">.env.example</a> menjadi .env. Dan konfigurasi pada baris kode tersebut

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<YOUR _DATABASE NAME>
DB_USERNAME=<YOUR_USERNAME>
DB_PASSWORD=<YOUR_PASSWORD>
```

#### 6. Bila membutuhkan data dummy

Perintah ini digunakan untuk mengenerate data dummy, jika database yang dibuat masih kosong.

```sh
php artisan migrate --seed
```

Perintah ini digunakan untuk mengenerate data dummy, jika database yang dibuat sudah terdapat data didalamnya.

```sh
php artisan migrate:fresh --seed
```

#### 5. Jalankan Project

```sh
php artisan serve
```
