<h2>🎓 Frontend - Sistem Informasi Pengajuan Cuti Mahasiswa</h2>

```php
Nama : Luthfiana Putri Salsabila
Kelas : TI-2C
NPM : 230302066
```
Proyek ini merupakan implementasi frontend Laravel dengan Tailwind CSS yang berkomunikasi dengan backend REST API (dari CodeIgniter) dan digunakan sebagai penilaian Ujian AKhir Semester mata kuliah Pemrograman Berbasis Framewok

SIP-CUTI Backend : ```https://github.com/Alledanaralle/PBF```
SIP-CUTI Database : ```https://github.com/andinardelinaa/Database_PengajuanCuti```

Cara Pembuatan :
1. Clone Repository BE
   ```php
   git clone  https://github.com/Alledanaralle/PBF
   ```
   ```php
   cd PBF
   ```

2. Install Dependency CodeIgniter
   ```php
   composer install
   ```

3. Copy File Environment
   ```php cp .env.example .env```
   Lalu aktifkan bagian databasenya

4. Jalankan CodeIgniter
   ```php
   php spark serve
   ```

5. Cek EndPoint dengan Postman
   A. Mahasiswa
    - GET: http://localhost:8080/mahasiswa
    - POST: http://localhost:8080/mahasiswa
    - PUT: http://localhost:8080/mahasiswa/{npm}
    - DELETE: http://localhost:8080/mahasiswa/{npm}

    B. Kajur
    - GET http://localhost:8080/kajur
    - POST http://localhost:8080/kajur
    - PUT http://localhost:8080/kajur/{id_kajur}
    - DELETE http://localhost:8080/delete/{id_kajur}

6. Membuat File Laravel
   - Buka Laragon
   - Klik kanan
   - Klik QUick app
   - Pilih Laravel lalu ketikan nama Frontend-UAS-230302066

7. Install Dependency Laravel
   ```php
    composer install
   ```

8. Copy File Enviroment
   ```php
    cp .env.example .env
   ```

9. Jalankan Laravel
    ```php
    php artisan serve
    ```

10. Membuat Routing
11. Membuat controller
    ```php
    php artisan make:controller MahasiswaController
    php artisan make:controller KajurController
    php artisan make:controller DashboardController
    ```
12. Lalu membuat blade untuk tampilannya
13. Coba jalankan, semoga berhasill!!!
