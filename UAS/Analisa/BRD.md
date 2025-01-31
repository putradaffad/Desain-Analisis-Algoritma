# Business Requirements Document (BRD) untuk EduGrowth Academy

## 1. Pendahuluan

Dokumen ini bertujuan untuk menggambarkan **kebutuhan bisnis** yang perlu dipenuhi oleh platform **EduGrowth Academy**. EduGrowth Academy adalah platform pembelajaran berbasis web yang menyediakan kursus **pemrograman dan pengembangan web**, dengan tujuan untuk membantu individu mengembangkan keterampilan teknis mereka dan mempersiapkan mereka untuk dunia kerja yang semakin digital.

## 2. Tujuan Proyek

Tujuan dari pengembangan platform **EduGrowth Academy** adalah untuk:
- **Meningkatkan keterampilan teknis** peserta dalam pengembangan web melalui berbagai bahasa pemrograman yang relevan seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**.
- **Fleksibilitas pembelajaran** dengan memberikan akses yang dapat diakses kapan saja dan di mana saja oleh peserta.
- **Aksesibilitas yang terjangkau**, menyediakan kursus berkualitas tinggi dengan harga yang lebih terjangkau dibandingkan dengan pendidikan formal.
- **Pengembangan pribadi dan profesional** yang memungkinkan peserta untuk mengembangkan keterampilan mereka baik untuk tujuan karier maupun pribadi.

## 3. Stakeholders yang Terlibat

### 3.1. **Admin (Tim Manajemen)**
   - **Tugas**: Mengelola kursus, materi, dan pengguna.
   - **Peran**: Bertanggung jawab atas pengelolaan platform, laporan kemajuan pengguna, dan pengelolaan konten kursus.

### 3.2. **Pengguna (Peserta Kursus)**
   - **Tugas**: Mengikuti kursus, menyelesaikan penilaian, dan menerima sertifikat.
   - **Peran**: Peserta yang belajar dan berkembang melalui platform ini, baik individu yang baru belajar pemrograman maupun profesional yang ingin memperdalam keterampilan mereka.

### 3.3. **Instruktur (Pelatih)**
   - **Tugas**: Menyusun materi kursus, memberikan penilaian, dan memberi umpan balik kepada peserta.
   - **Peran**: Membimbing peserta kursus dan memastikan materi yang diberikan sesuai dengan perkembangan industri dan kebutuhan peserta.

## 4. Deskripsi Sistem

### 4.1. **Fitur Utama**

1. **Pendaftaran Pengguna**
   - Pengguna dapat mendaftar menggunakan **email** dan **password** serta mengisi **profil** mereka dengan tujuan dan keterampilan yang ingin dikembangkan.

2. **Kursus dan Modul Pembelajaran**
   - Kursus tersedia dalam berbagai bahasa pemrograman seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**.
   - Kursus mencakup **video**, **dokumentasi**, dan latihan praktis seperti **kuis** atau **proyek akhir**.

3. **Penilaian dan Umpan Balik**
   - Setiap kursus dilengkapi dengan **penilaian otomatis**, berupa **kuis** atau **tugas**, yang mengevaluasi pemahaman peserta.
   - **Umpan balik** diberikan oleh instruktur atau otomatis dari sistem.

4. **Sertifikat dan Pencapaian**
   - Setelah menyelesaikan kursus, peserta yang telah memenuhi persyaratan akan mendapatkan **sertifikat digital** yang dapat diunduh atau dicetak sebagai bukti pencapaian mereka.

### 4.2. **Teknologi yang Digunakan**
1. **Docker**
   - **Penggunaan**: Docker digunakan untuk mengemas aplikasi bersama dengan semua dependensinya dalam sebuah kontainer yang konsisten, memastikan aplikasi dapat berjalan di berbagai lingkungan seperti pengembangan, staging, dan produksi.
   - **Keuntungan**: 
     - **Portabilitas** yang tinggi.
     - **Skalabilitas** aplikasi yang lebih baik.
     - **Isolasi** lingkungan pengembangan yang menghindari konflik dependensi antar layanan.

2. **MySQL**
   - **Penggunaan**: Sebagai **sistem manajemen basis data** untuk menyimpan informasi pengguna, kursus, progres, dan sertifikat.
   - **Keuntungan**:
     - **Kinerja tinggi** dan cocok untuk aplikasi yang membutuhkan skalabilitas dan performa yang handal.
     - Penyimpanan data dengan hubungan yang jelas antara entitas seperti pengguna, kursus, dan progres.

3. **Laravel**
   - **Penggunaan**: Framework PHP untuk membangun aplikasi web, dengan fitur-fitur built-in seperti autentikasi pengguna, ORM (Eloquent), dan Blade templating engine.
   - **Keuntungan**:
     - **Kemudahan pengembangan** aplikasi berkat banyaknya fitur built-in.
     - **Keamanan** yang baik dengan proteksi CSRF, validasi input, dan autentikasi otomatis.
     - Pengelolaan **database** menggunakan **Eloquent ORM**, yang memudahkan interaksi antara aplikasi dan database.

## 5. Kebutuhan Bisnis

### 5.1. **Kebutuhan Fungsional**
1. **Pendaftaran Pengguna**
   - Pengguna harus dapat **mendaftar** menggunakan email dan password.
   - Pengguna harus mengisi **profil** mereka dengan tujuan dan keterampilan yang ingin dikembangkan.

2. **Manajemen Kursus**
   - **Admin** dapat **mengelola** kursus (menambahkan, mengedit, menghapus kursus).
   - **Instruktur** dapat **menyusun materi kursus** dan **menilai** tugas/kuis peserta.

3. **Pembelajaran dan Progres**
   - Pengguna dapat **mengakses materi** pembelajaran dan mengikuti kursus.
   - **Progres** pengguna tercatat, dan peserta dapat mengerjakan kuis atau tugas untuk memperoleh umpan balik.

4. **Sertifikat**
   - Setelah menyelesaikan kursus, **sertifikat digital** diterbitkan untuk peserta yang telah memenuhi semua persyaratan kursus.

### 5.2. **Kebutuhan Non-Fungsional**
1. **Keamanan**
   - Sistem harus memiliki proteksi **CSRF**, **validasi input**, dan **autentikasi pengguna** yang aman.

2. **Skalabilitas**
   - Platform harus **scalable** dan dapat menangani banyak pengguna tanpa penurunan performa.

3. **Ketersediaan**
   - Platform harus dapat diakses oleh pengguna **kapan saja dan di mana saja** melalui internet.

4. **Performa**
   - Materi kursus harus dapat diakses dengan **waktu muat yang cepat** dan tanpa gangguan.

## 6. Kebutuhan Sistem

### 6.1. **Kebutuhan Perangkat Keras**
   - **Server** untuk hosting aplikasi, database, dan media.
   - **Penyimpanan** untuk menyimpan file kursus dan sertifikat digital.

### 6.2. **Kebutuhan Perangkat Lunak**
   - **Platform Web** yang dapat diakses melalui browser.
   - **Sistem Database** yang menggunakan **MySQL**.
   - **Docker** untuk pengemasan aplikasi.
   - **Laravel Framework** untuk pengembangan backend.

## 7. Proses Bisnis

### 7.1. **Proses Pendaftaran Pengguna**
1. Pengguna mengisi **form pendaftaran**.
2. Pengguna menerima **email verifikasi**.
3. Pengguna mengisi **profil** mereka untuk melanjutkan ke kursus.

### 7.2. **Proses Pembelajaran**
1. Pengguna memilih **kursus** yang diinginkan.
2. Pengguna mengikuti **materi kursus** dan mengerjakan **tugas/kuis**.
3. Pengguna menerima **umpan balik** dan progres mereka tercatat.

### 7.3. **Penerbitan Sertifikat**
1. Setelah kursus selesai, **sistem memeriksa progres** peserta.
2. Jika kursus selesai, **sertifikat diterbitkan** dan dikirimkan ke pengguna.

## 8. Matriks Prioritas Kebutuhan

| Kebutuhan                   | Prioritas |
|-----------------------------|-----------|
| Pendaftaran Pengguna        | Tinggi    |
| Manajemen Kursus           | Tinggi    |
| Pembelajaran dan Progres    | Tinggi    |
| Sertifikat dan Pencapaian   | Menengah  |
| Keamanan dan Performa       | Tinggi    |
| Skalabilitas dan Ketersediaan | Tinggi    |

## 9. Persyaratan Pengujian

1. **Fungsionalitas**:
   - Pengguna harus dapat mendaftar dan mengakses kursus dengan lancar.
   - Pengguna harus menerima umpan balik setelah mengerjakan kuis atau tugas.
   - Pengguna harus mendapatkan sertifikat setelah menyelesaikan kursus.

2. **Keamanan**:
   - Sistem harus memvalidasi input pengguna dan menyediakan proteksi terhadap serangan seperti CSRF dan SQL injection.

3. **Performa**:
   - Pengguna harus dapat mengakses materi kursus tanpa gangguan atau waktu muat yang lama.

## 10. Kesimpulan

**EduGrowth Academy** bertujuan untuk menyediakan platform pembelajaran yang fleksibel dan terjangkau dalam bidang **Pemrograman dan Pengembangan Web**. Dengan menggunakan teknologi seperti **Docker**, **Laravel**, dan **MySQL**, platform ini akan mampu menyediakan kursus berkualitas tinggi yang dapat diakses kapan saja dan di mana saja, memungkinkan individu untuk meningkatkan keterampilan teknis mereka dalam dunia digital.

Dokumen ini memberikan gambaran yang jelas tentang **kebutuhan bisnis**, **fitur utama**, dan **proses bisnis** yang harus dipenuhi oleh EduGrowth Academy. Ini juga menetapkan dasar untuk pengembangan lebih lanjut dan implementasi sistem secara efisien.
