# Panduan Database & Seeding

Berikut adalah panduan untuk menjalankan migrasi database dan seeding data (pengisian data awal) dengan urutan yang benar agar tidak terjadi error relasi (foreign key).

## 1. Cara Cepat (Rekomendasi)

Untuk mereset ulang seluruh database dan mengisi semua data dummy sekaligus, jalankan perintah berikut:

```bash
php artisan migrate:fresh --seed
```

Perintah ini akan:

1. Menghapus semua tabel yang ada.
2. Membuat ulang tabel sesuai file migrasi.
3. Menjalankan `DatabaseSeeder` yang sudah diatur urutannya.

---

## 2. Urutan Seeder (Jika dijalankan manual)

Jika Anda ingin menjalankan seeder satu per satu, **WAJIB** mengikuti urutan berikut karena adanya ketergantungan data (relasi antar tabel):

1.  **Admin & User** (Harus ada user dulu sebelum bisa buat booking/review)

    ```bash
    php artisan db:seed --class=AdminUserSeeder
    php artisan db:seed --class=UserSeeder
    ```

2.  **Kamar (Rooms)** (Harus ada kamar dulu sebelum dibooking)

    ```bash
    php artisan db:seed --class=RoomSeeder
    ```

3.  **Diskon (Discounts)** (Data master diskon)

    ```bash
    php artisan db:seed --class=DiscountSeeder
    ```

4.  **Booking** (Butuh data User & Room)

    ```bash
    php artisan db:seed --class=BookingSeeder
    ```

5.  **Review** (Butuh data Booking yang statusnya 'selesai')
    ```bash
    php artisan db:seed --class=ReviewSeeder
    ```

---

## 3. Akun Demo

Setelah seeding berhasil, Anda bisa login menggunakan akun berikut:

**Admin:**

-   Email: `admin@admin.com`
-   Password: `password`

**Customer (User):**

-   Email: `customer@example.com`
-   Password: `password`

_(Terdapat juga 5 user dummy lain yang dibuat secara acak)_
