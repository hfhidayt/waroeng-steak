1. Download atau clone repository : <code>https://github.com/HassanFHidayat/waroeng-steak.git</code>
2. Buka terminal pada directory project dan jalankan perintah <code>composer install</code>
3. Kemudian jalankan perintah <code>cp .env.example .env</code>
4. Selanjutnya jalankan perintah <code>php artisan key:generate</code>
5. Buat database baru dengan nama <code>waroengsteak</code>
6. Konfigurasi database di file <code>.env</code>
7. Kemudian Jalankan perintah <code>php artisan migrate:refresh --seed</code>
8. Selanjutnya jalankan perintah <code>php artisan storage:link</code>
9. Jalankan aplikasi dengan printah <code>php artisan serve</code>
