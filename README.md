### Cara Install

1. Clone atau download source code
    - Buka CMD/git bash, clone repo dengan mengetikkan `git clone https://github.com/dianayuan15/SINTREN_WEB.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. Setelah selesai download, buka source code yang telah di unduh pada code editor (misal: Visual Studio Code)

### Cara Menjalankan

1. Pada terminal ketik `composer install`
2. lalu ketik `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
3. Pada terminal ketik `php artisan key:generate`
5. Buat **database pada mysql** untuk aplikasi ini (`sintrendb`)
6. **Setting database** pada file `.env`
7. Samakan kode berikut pada pada file `.env` yang sudah ada (jika belum ada tambahkan)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sintrendb
DB_USERNAME=root
DB_PASSWORD=

8. Ketik `php artisan migrate --seed`
    - Jika sudah ada data didalam database `sintrendb`, bisa menggunakan `php artisan migrate:refresh --seed`
9. Ketik `php artisan storage:link`
    - Pastikan pada folder public tidak ada folder storage (jika ada, folder storage pada public/storage bisa dihapus saja)
10. Ketik `php artisan serve`
11. Selesai

<hr>

## Info Credential

### Login Operator

Username: operator
Password: password


### Login Petugas Pangan

Username: pangan
Password: password


Catatan:
- Password **Akun seluruh User** adalah default yaitu `password`.

