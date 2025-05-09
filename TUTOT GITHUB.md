# 📘 TUTORIAL UNTUK COLLABORATOR  
Proyek: **Mizuro Tech Website (Laravel)**

---

## ✅ 1. Clone Repository dari GitHub

```bash
git clone https://github.com/USERNAME/REPO-NAME.git
Ganti USERNAME dan REPO-NAME sesuai URL repository GitHub.

✅ 2. Masuk ke Folder Proyek
bash
Copy
Edit
cd REPO-NAME
✅ 3. Install Dependency Laravel
bash
Copy
Edit
composer install
npm install
✅ 4. Salin File .env dan Generate Key
bash
Copy
Edit
cp .env.example .env
php artisan key:generate
Lalu sesuaikan konfigurasi database di file .env (MySQL, dll).

✅ 5. Jalankan Server Lokal
bash
Copy
Edit
php artisan serve
✅ 6. Buat Perubahan (edit file)
Misalnya:

resources/views/home.blade.php

public/css/custom.css

✅ 7. Cek Status Git
bash
Copy
Edit
git status
✅ 8. Tambahkan Perubahan dan Commit
bash
Copy
Edit
git add .
git commit -m "Deskripsi perubahan"
Contoh:

bash
Copy
Edit
git commit -m "Tambah carousel dan perbaiki tampilan layanan"
✅ 9. Push ke GitHub
Jika kamu berada di main:

bash
Copy
Edit
git push origin main
Atau jika kamu buat branch baru:

bash
Copy
Edit
git checkout -b nama-branch
git push origin nama-branch
✅ 10. Pull Request (opsional)
Buka GitHub

Klik Compare & pull request

Tambahkan deskripsi

Klik Create pull request

