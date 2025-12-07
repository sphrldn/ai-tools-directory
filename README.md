# 🤖 AI Tools Directory

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

**AI Tools Directory** adalah aplikasi berbasis web sederhana yang berfungsi untuk mencatat, mengelola, dan menyimpan daftar alat-alat Artificial Intelligence (AI) favorit. Projek ini dibangun menggunakan Framework **Laravel** dan **Bootstrap 5**.

Projek ini dibuat sebagai **Tugas Akhir / Final Project** Praktikum Pemrograman Web.

## 📸 Screenshots
[Landing Page] <img width="2559" height="1525" alt="image" src="https://github.com/user-attachments/assets/100700c0-18f8-4db3-bcb3-937c2e306b90" />
 />
[Home Page] <img width="2559" height="1503" alt="image" src="https://github.com/user-attachments/assets/40ae20ce-46b2-485f-91c4-205e60681491" />
 />
[Create Page] <img width="2559" height="1524" alt="image" src="https://github.com/user-attachments/assets/a4c12bc6-cc7f-4fcd-8ef7-a8cc6fd8360c" />
 />
[Edit Page] <img width="2559" height="1520" alt="image" src="https://github.com/user-attachments/assets/ac72bc77-39ec-4309-9077-d316e8b20ad8" />
 />



## ✨ Fitur Utama
Aplikasi ini memiliki fitur **CRUD** (Create, Read, Update, Delete) yang lengkap:
* ✅ **Landing Page:** Halaman depan yang modern dan responsif.
* ✅ **Create:** Menambahkan data tool AI baru (Nama, Kategori, Deskripsi, Link).
* ✅ **Read:** Menampilkan daftar tools dalam bentuk kartu (Grid Layout).
* ✅ **Update:** Mengedit informasi tool yang sudah ada.
* ✅ **Delete:** Menghapus data tool dari database.
* ✅ **Validation:** Validasi input form (wajib isi, format URL, dll).

## 🛠️ Teknologi yang Digunakan
* **Backend:** PHP, Laravel Framework (Versi 10/11)
* **Frontend:** HTML5, CSS3, Bootstrap 5 (CDN)
* **Database:** MySQL
* **Tools:** VS Code, XAMPP, Git & GitHub

## 🚀 Cara Instalasi (How to Run)
Jika ingin menjalankan projek ini di komputer lokal, ikuti langkah berikut:

1.  **Clone Repository**
    ```bash
    git clone [https://github.com/USERNAME-KAMU/ai-tools-directory.git](https://github.com/USERNAME-KAMU/ai-tools-directory.git)
    cd ai-tools-directory
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Setup Environment (.env)**
    * Duplikat file `.env.example` dan ubah namanya menjadi `.env`.
    * Atur konfigurasi database di dalam file `.env`:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_ai_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4.  **Generate Key & Migrasi Database**
    ```bash
    php artisan key:generate
    php artisan migrate
    ```

5.  **Jalankan Server**
    ```bash
    php artisan serve
    ```
    Buka browser dan akses: `http://127.0.0.1:8000`

## 👤 Author
* **Nama:** Saphira Aldyna Masik
* **NPM:** 51423361
* **Kelas:** 3IA01

---
*Dibuat dengan ❤️ menggunakan Laravel.*
