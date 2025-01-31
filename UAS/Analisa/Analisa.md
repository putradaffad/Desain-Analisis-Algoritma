# Analisis Proyek EduGrowth Academy

## Studi Kasus: Platform Pembelajaran Pemrograman dan Pengembangan Web Berbasis Web

### Latar Belakang
Pada era digital saat ini, keterampilan dalam **pemrograman** dan **pengembangan web** menjadi sangat penting bagi individu yang ingin bersaing di pasar kerja global. Banyak profesional yang merasa perlu untuk meningkatkan keterampilan teknis mereka, terutama dalam bahasa pemrograman dan pengembangan web. **EduGrowth Academy** hadir sebagai platform online yang menyediakan berbagai kursus pemrograman dan pengembangan web yang dirancang untuk membantu individu mempelajari keterampilan teknis yang sangat dibutuhkan. Kursus yang disediakan meliputi bahasa pemrograman seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**. Platform ini menawarkan pembelajaran yang fleksibel, memungkinkan peserta untuk mengakses kursus kapan saja dan di mana saja.

### Tujuan EduGrowth Academy
- **Meningkatkan keterampilan teknis**: Membekali peserta dengan keterampilan yang relevan di dunia kerja, khususnya dalam pengembangan web.
- **Fleksibilitas pembelajaran**: Memberikan akses pembelajaran yang bisa diakses kapan saja, memungkinkan peserta belajar sesuai dengan kecepatan mereka sendiri.
- **Aksesibilitas dan terjangkau**: Menyediakan kursus berkualitas dengan harga yang lebih terjangkau dibandingkan pendidikan formal.
- **Peningkatan keterampilan pribadi dan profesional**: Memberikan kesempatan bagi peserta untuk mengembangkan diri secara pribadi dan profesional melalui kursus pemrograman web.

## Company Profile

**EduGrowth Academy** adalah platform pendidikan online yang berfokus pada **Pemrograman dan Pengembangan Web**. Platform ini menyediakan kursus dalam bahasa pemrograman yang sering digunakan dalam industri teknologi, seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**. EduGrowth Academy bertujuan untuk membantu individu dalam memperluas keterampilan teknis mereka, baik untuk tujuan profesional maupun pribadi. 

- **Visi**: Menjadi platform pendidikan terdepan untuk pembelajaran pemrograman dan pengembangan web yang dapat diakses secara fleksibel oleh siapa saja, di mana saja, kapan saja.
- **Misi**: Memberikan kursus praktis berbasis proyek yang mempersiapkan peserta untuk dunia kerja nyata dalam bidang teknologi, serta memperkenalkan mereka pada berbagai aspek pengembangan web.

## Stakeholder yang Terlibat
1. **Admin (Tim Manajemen)**:
   - Tugas: Mengelola kursus, materi, dan pengguna.
   - Peran: Bertanggung jawab atas pengelolaan platform, laporan kemajuan pengguna, dan pengelolaan konten kursus.
   
2. **Pengguna (Peserta Kursus)**:
   - Tugas: Mengikuti kursus, menyelesaikan penilaian, dan menerima sertifikat.
   - Peran: Peserta yang belajar dan berkembang melalui platform ini, baik individu yang baru belajar pemrograman maupun profesional yang ingin memperdalam keterampilan mereka.

3. **Instruktur (Pelatih)**:
   - Tugas: Menyusun materi kursus, memberikan penilaian, dan memberi umpan balik kepada peserta.
   - Peran: Membimbing peserta kursus dan memastikan materi yang diberikan sesuai dengan perkembangan industri dan kebutuhan peserta.

## Teknologi yang Digunakan
1. **Docker**:
   - **Penggunaan**: Docker digunakan untuk mengemas aplikasi bersama dengan semua dependensinya dalam sebuah kontainer yang konsisten. Hal ini memastikan aplikasi dapat berjalan dengan cara yang sama di berbagai lingkungan, seperti pengembangan, staging, dan produksi.
   - **Keuntungan**:
     - Portabilitas yang tinggi.
     - Skalabilitas aplikasi yang lebih baik.
     - Isolasi lingkungan pengembangan yang menghindari konflik dependensi antara berbagai layanan.

2. **MySQL**:
   - **Penggunaan**: MySQL akan digunakan sebagai sistem manajemen basis data untuk menyimpan informasi pengguna, kursus, progres belajar, dan sertifikat.
   - **Keuntungan**:
     - Kinerja tinggi dan cocok untuk aplikasi yang membutuhkan skalabilitas dan performa yang handal.
     - Penyimpanan data dengan hubungan yang jelas antara entitas seperti pengguna, kursus, dan progres.
  
3. **Laravel**:
   - **Penggunaan**: Laravel adalah framework PHP yang akan digunakan untuk membangun aplikasi web. Laravel menyediakan berbagai fitur built-in, seperti autentikasi pengguna, ORM (Eloquent), dan Blade templating engine.
   - **Keuntungan**:
     - Mempermudah pengembangan aplikasi berkat banyaknya fitur built-in yang disediakan oleh Laravel.
     - Keamanan yang baik, dengan proteksi CSRF, validasi input, dan autentikasi otomatis.
     - Pengelolaan database menggunakan Eloquent ORM, yang memudahkan interaksi antara aplikasi dan database.

## Fitur Utama yang Tersedia
1. **Pendaftaran Pengguna**:
   - Pengguna dapat mendaftar melalui email dan password, serta mengisi profil mereka dengan tujuan dan keterampilan yang ingin dikembangkan.
   
2. **Kursus dan Modul Pembelajaran**:
   - Kursus tersedia dalam berbagai bahasa pemrograman seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**.
   - Setiap kursus mencakup video, dokumentasi, dan latihan praktis seperti kuis atau proyek akhir.

3. **Penilaian dan Umpan Balik**:
   - Setiap kursus dilengkapi dengan penilaian otomatis, berupa kuis atau tugas, yang mengevaluasi pemahaman peserta.
   - Umpan balik diberikan oleh instruktur atau secara otomatis oleh sistem.

4. **Sertifikat dan Pencapaian**:
   - Setelah menyelesaikan kursus dengan sukses, peserta akan menerima sertifikat digital yang dapat diunduh atau dicetak sebagai bukti pencapaian mereka.

## ERD (Entity Relationship Diagram)

| **User**      | **Course**   | **Progress**  | **Certificate** |
|---------------|--------------|---------------|-----------------|
| **user_id**   | **course_id**| **progress_id**| **cert_id**     |
| name          | name         | user_id       | user_id         |
| email         | description  | course_id     | course_id       |
| password      | category     | status        | date_issued     |
| goals         | duration     | score         |                 |

### Penjelasan Entitas dan Hubungan:

1. **User (Pengguna)**:
   - **user_id**: ID unik untuk setiap pengguna.
   - **name**: Nama pengguna.
   - **email**: Alamat email pengguna.
   - **password**: Kata sandi pengguna untuk autentikasi.
   - **goals**: Tujuan pengguna mengikuti kursus (misalnya, untuk meningkatkan keterampilan atau mempersiapkan karier).

   **Hubungan**: 
   - Seorang pengguna dapat memiliki banyak **Progres** dan dapat memperoleh banyak **Sertifikat** setelah menyelesaikan kursus.

2. **Course (Kursus)**:
   - **course_id**: ID unik untuk setiap kursus.
   - **name**: Nama kursus.
   - **description**: Deskripsi kursus.
   - **category**: Kategori kursus (misalnya, Pemrograman, Desain Web, dll).
   - **duration**: Durasi kursus.

   **Hubungan**: 
   - Setiap kursus dapat diikuti oleh banyak pengguna dan menghasilkan banyak **Sertifikat** setelah diselesaikan.

3. **Progress (Progres)**:
   - **progress_id**: ID unik untuk entri progres.
   - **user_id**: ID pengguna yang mengikuti kursus.
   - **course_id**: ID kursus yang diikuti oleh pengguna.
   - **status**: Status progres pengguna dalam kursus (misalnya, selesai, sedang berlangsung).
   - **score**: Nilai atau hasil yang diperoleh pengguna setelah menyelesaikan tugas atau ujian dalam kursus.

   **Hubungan**:
   - Menghubungkan **User** dan **Course** untuk melacak progres belajar pengguna dalam kursus tertentu.

4. **Certificate (Sertifikat)**:
   - **cert_id**: ID unik untuk sertifikat.
   - **user_id**: ID pengguna yang menerima sertifikat.
   - **course_id**: ID kursus yang selesai dan memberikan sertifikat.
   - **date_issued**: Tanggal sertifikat diterbitkan.

   **Hubungan**:
   - Setiap sertifikat diberikan kepada pengguna yang menyelesaikan kursus, yang tercatat di **Course**.


## Analisis 5W 1H dan SWOT

### 5W 1H

- **What (Apa)**:  
  EduGrowth Academy adalah platform berbasis web yang menyediakan kursus pemrograman dan pengembangan web. Kursus yang tersedia mencakup berbagai bahasa pemrograman seperti **Python**, **JavaScript**, **PHP**, **HTML**, dan **CSS**.

- **Why (Mengapa)**:  
  Tujuan dari EduGrowth Academy adalah untuk memberikan akses kepada individu yang ingin mempelajari keterampilan pemrograman dan pengembangan web secara fleksibel dan terjangkau. Dengan berkembangnya kebutuhan akan keterampilan digital, platform ini memberikan kesempatan bagi individu untuk meningkatkan keterampilan mereka dengan cara yang lebih mudah diakses dan sesuai kebutuhan.

- **Who (Siapa)**:  
  Pengguna utama platform ini adalah individu yang ingin mempelajari pemrograman web, baik pemula maupun profesional yang ingin memperdalam keterampilan mereka dalam dunia pengembangan aplikasi web.

- **Where (Di mana)**:  
  EduGrowth Academy dapat diakses dari mana saja melalui internet, membuat platform ini fleksibel dan dapat diakses oleh siapa saja yang memiliki koneksi internet.

- **When (Kapan)**:  
  Pengguna dapat mengakses kursus dan materi kapan saja, sesuai dengan waktu luang mereka.

- **How (Bagaimana)**:  
  Pengguna dapat mendaftar di platform, memilih kursus yang diinginkan, mengikuti materi pembelajaran, menyelesaikan penilaian, dan menerima sertifikat setelah menyelesaikan kursus.

### SWOT Analysis

- **Strengths (Kekuatan)**:
  - Pembelajaran yang fleksibel dan dapat diakses kapan saja, sangat cocok untuk individu yang memiliki jadwal padat.
  - Kursus yang terstruktur dengan baik dan mencakup berbagai bahasa pemrograman yang relevan.
  - Platform yang menggunakan teknologi terbaru (Docker, Laravel, MySQL) untuk mendukung skalabilitas dan kinerja yang tinggi.

- **Weaknesses (Kelemahan)**:
  - Kurangnya interaksi langsung dengan instruktur bisa membuat beberapa peserta merasa kurang terhubung.
  - Ketergantungan pada koneksi internet yang stabil untuk mengakses materi pembelajaran secara optimal.

- **Opportunities (Peluang)**:
  - Kemampuan untuk memperluas kursus dengan teknologi terbaru yang berkembang di industri.
  - Potensi untuk bekerja sama dengan perusahaan atau lembaga pendidikan untuk menyediakan kursus khusus yang disesuaikan dengan kebutuhan industri.

- **Threats (Ancaman)**:
  - Persaingan yang semakin ketat dengan platform pendidikan online lainnya seperti Coursera, Udemy, dan edX.
  - Perubahan cepat dalam teknologi yang mengharuskan EduGrowth Academy untuk terus memperbarui kontennya agar tetap relevan.

## Kesimpulan
EduGrowth Academy adalah platform pembelajaran online yang menawarkan kursus pengembangan keterampilan teknis dalam **Pemrograman dan Pengembangan Web**. Dengan menggunakan teknologi seperti **Laravel**, **Docker**, dan **MySQL**, platform ini memberikan pengalaman belajar yang efisien dan skalabel. EduGrowth Academy memungkinkan peserta untuk mengakses kursus kapan saja, mempelajari keterampilan yang sangat dibutuhkan dalam industri, dan mengembangkan diri baik secara profesional maupun pribadi.

