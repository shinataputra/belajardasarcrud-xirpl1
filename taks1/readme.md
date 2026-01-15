---
title: Task 1 - CRUD
description: CRUD Fundamental (Native PHP)
---

# 🧩 CRUD Fundamental (Native PHP)

## 📌 Pengertian CRUD
**CRUD** adalah singkatan dari:
- **Create** → menambahkan data
- **Read** → menampilkan data
- **Update** → mengubah data
- **Delete** → menghapus data  

CRUD merupakan **konsep dasar** dalam pengelolaan data pada hampir semua aplikasi berbasis database.

---

## 📂 Struktur Project

crud-php-sederhana/
│
├── index.php
├── tambah.php
├── edit.php
├── hapus.php
├── koneksi.php
│
└── database.sql


---

## 🧠 Fungsi Tiap File

- **koneksi.php**  
  Digunakan untuk menghubungkan aplikasi PHP dengan database MySQL.

- **index.php**  
  Menampilkan seluruh data siswa dari database (**READ**).

- **tambah.php**  
  Menampilkan form input dan memproses penambahan data (**CREATE**).

- **edit.php**  
  Menampilkan form edit dan memproses perubahan data (**UPDATE**).

- **hapus.php**  
  Memproses penghapusan data berdasarkan `id` (**DELETE**).

- **database.sql**  
  Berisi query pembuatan database dan tabel.

---

## 🔄 Alur Project CRUD

1. **Membuat Database**  
   Database dibuat menggunakan MySQL.

2. **Membuat Tabel**  
   Tabel `siswa` dibuat untuk menyimpan data.

3. **Halaman `index.php` (Read)**  
   Menampilkan data siswa dalam bentuk tabel.

4. **Halaman `tambah.php` (Create)**  
   Menambahkan data siswa baru ke database.

5. **Halaman `edit.php` (Update)**  
   Mengubah data siswa yang sudah ada.

6. **Halaman `hapus.php` (Delete)**  
   Menghapus data siswa dari database.

---

## 🎯 Tujuan Pembelajaran

Setelah menyelesaikan task ini, siswa mampu:
- Memahami konsep dasar CRUD
- Menghubungkan PHP dengan database MySQL
- Mengelola data menggunakan PHP native
- Memahami alur aplikasi berbasis database

---

## 📌 Catatan Penting
- Menggunakan **PHP Native (tanpa framework)**
- Fokus pada **logika CRUD**
- Struktur sederhana agar mudah dipahami pemula

---
