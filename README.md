<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/naufal-yafi/spec-finder/assets/87789251/d3fab560-4838-417f-bbec-719125c259fd" width="400"></a></p>

#### 1. Tools yang harus dipersiapkan

-   XAMPP
-   Composer
-   NPM
-   GIT

#### 2. Unduh repository

```sh
  git clone https://github.com/naufal-yafi/spec-finder.git && cd spec-finder
```

#### 2. Unduh semua dependensi

```sh
  composer install && npm i
```

#### 3. Buat database

#### 4. Bila membutuhkan data dummy

```sh
  php artisan migrate --seed
```

atau

```sh
  php artisan migrate:fresh --seed
```

#### 5. Jalankan Project

```sh
  php artisan serve
```
