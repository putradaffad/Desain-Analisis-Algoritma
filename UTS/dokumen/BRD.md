# Business Requirements Document (BRD)

## Proyek: Sistem Manajemen Pelanggan untuk Bisnis Eco Fresh
**Versi:** 1.0  
**Tanggal:** 15 November 2024

---

## 1. Tujuan Proyek
Sistem ini bertujuan untuk meningkatkan efisiensi dalam pengelolaan data pelanggan dan transaksi di bisnis Eco Fresh melalui digitalisasi proses. Sistem ini akan memungkinkan manajemen data pelanggan yang lebih terstruktur, mempermudah analisis data pelanggan, serta mendukung pengambilan keputusan berbasis data yang lebih akurat.

## 2. Lingkup Proyek
Sistem ini mencakup:
- **Manajemen Data Pelanggan:** Menyimpan, mengedit, dan menghapus data pelanggan secara aman.
- **Pencatatan Riwayat Pembelian:** Mencatat transaksi pembelian oleh pelanggan.
- **Laporan dan Analisis:** Menyediakan laporan tentang pelanggan dan transaksi pembelian.
- **Keamanan dan Akses:** Sistem yang hanya dapat diakses oleh admin setelah melakukan autentikasi.

## 3. Fitur Utama

### 3.1 Admin
- **Manajemen Data Pelanggan:** Menambah, mengedit, dan menghapus data pelanggan.
  - Menyimpan data pelanggan seperti nama, alamat, telepon, email, preferensi produk, tanggal registrasi, dan status aktif.
- **Pencatatan Riwayat Pembelian:** Mencatat barang yang dibeli oleh pelanggan dan menyimpannya untuk analisis lebih lanjut.
- **Pencarian dan Filter Data:** Admin dapat mencari pelanggan berdasarkan nama, alamat, atau email.
- **Laporan dan Analisis:** Admin dapat mengunduh laporan data pelanggan dan riwayat transaksi dalam format CSV atau PDF.
- **Keamanan:** Sistem hanya dapat diakses oleh admin yang sudah terautentikasi.

### 3.2 Pengguna
- **Akses Pelanggan:** Pelanggan dapat melihat status dan riwayat pembelian mereka.
- **Pembatasan Akses:** Pelanggan tidak dapat mengedit atau menghapus data mereka.

## 4. Persyaratan Fungsional

### 4.1 Sistem Login
- Autentikasi berbasis email dan kata sandi untuk memastikan hanya admin yang dapat mengakses sistem.
- Sistem akan menampilkan pesan kesalahan jika login gagal.

### 4.2 Manajemen Data Pelanggan
- Admin dapat menambah, mengedit, dan menghapus data pelanggan.
- Setiap perubahan pada data pelanggan akan dicatat dalam log untuk audit.

### 4.3 Pencatatan Riwayat Pembelian
- Setiap pembelian yang dilakukan oleh pelanggan akan dicatat dalam sistem, termasuk nama produk, jumlah, harga, dan total transaksi.
- Riwayat pembelian akan terhubung dengan data pelanggan yang melakukan pembelian.

### 4.4 Ekspor Data
- Admin dapat mengekspor data pelanggan dan riwayat transaksi dalam format CSV atau PDF untuk analisis lebih lanjut.

### 4.5 Pencarian dan Filter Data
- Admin dapat mencari pelanggan berdasarkan kriteria tertentu, seperti nama, alamat, atau email.
- Sistem mendukung pencarian data yang cepat dengan menggunakan filter.

## 5. Persyaratan Non-Fungsional

### 5.1 Kegunaan
- Antarmuka sistem harus sederhana dan mudah digunakan oleh admin tanpa memerlukan pelatihan khusus.
- Proses administrasi seperti pencatatan pembelian dan pengelolaan data pelanggan harus efisien dan cepat.

### 5.2 Keamanan
- Data pelanggan disimpan secara aman dengan enkripsi yang kuat.
- Hanya admin yang dapat mengakses dan mengelola data pelanggan.
- Akses ke sistem menggunakan autentikasi berbasis email dan kata sandi.

### 5.3 Performa
- Sistem harus mampu menangani setidaknya 10.000 data pelanggan dan transaksi tanpa penurunan kinerja.
- Responsivitas sistem untuk input dan pengambilan data harus optimal.

### 5.4 Keandalan
- Sistem harus memiliki uptime 99,9% untuk memastikan aksesibilitas yang tinggi.
- Sistem harus dapat menangani kegagalan server atau data dengan cara yang minim mengganggu operasional.

## 6. Struktur Data

### Tabel Pelanggan
| Kolom                | Tipe Data           | Deskripsi                                                                 |
|----------------------|---------------------|---------------------------------------------------------------------------|
| id                   | bigint              | ID unik pelanggan                                                         |
| nama                 | string              | Nama lengkap pelanggan                                                    |
| alamat               | string              | Alamat lengkap pelanggan                                                   |
| telepon              | string (unik)       | Nomor telepon pelanggan                                                   |
| email                | string (unik)       | Email pelanggan                                                            |
| preferensi_produk    | string (nullable)   | Kategori produk favorit pelanggan                                         |
| tanggal_registrasi   | date                | Tanggal pelanggan terdaftar                                               |
| status               | boolean             | Status aktif atau tidak aktif pelanggan                                    |
| created_at           | timestamp           | Waktu data dibuat                                                          |
| updated_at           | timestamp           | Waktu data terakhir diperbarui                                            |

### Tabel Riwayat Pembelian
| Kolom                | Tipe Data           | Deskripsi                                                                 |
|----------------------|---------------------|---------------------------------------------------------------------------|
| id                   | bigint              | ID unik transaksi                                                         |
| pelanggan_id         | bigint (FK)         | ID pelanggan yang melakukan pembelian                                      |
| produk               | string              | Nama produk yang dibeli                                                   |
| jumlah               | integer             | Jumlah produk yang dibeli                                                 |
| harga                | decimal             | Harga satuan produk                                                       |
| total                | decimal             | Total harga transaksi                                                     |
| tanggal_transaksi    | date                | Tanggal transaksi dilakukan                                               |
| created_at           | timestamp           | Waktu data transaksi dicatat                                              |
| updated_at           | timestamp           | Waktu data transaksi terakhir diperbarui                                   |

## 7. Laporan dan Pengembangan Selanjutnya

### 7.1 Fitur Laporan
- Admin dapat mengunduh laporan pelanggan dan transaksi dalam format CSV atau PDF.

### 7.2 Pengembangan Masa Depan
- Penambahan fitur untuk mengelola inventaris produk.
- Integrasi dengan platform pemasaran untuk kampanye personalisasi.

## 8. Manajemen Risiko

### Risiko Keamanan:
- Enkripsi data dan autentikasi yang ketat akan diterapkan untuk melindungi data pelanggan.
  
### Risiko Performa:
- Sistem akan diuji dengan beban data besar untuk memastikan performa yang baik.
  
### Risiko Pengguna:
- Antarmuka sistem akan diuji untuk memastikan kemudahan penggunaan dan mengurangi kesalahan pengguna.
