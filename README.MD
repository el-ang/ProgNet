# Repo ProgNet 🌐
Repositori khusus materi dan penugasan pembelajaran kelas mata kuliah Pemrograman Internet.

<details><summary><b>Disusun Oleh</b></summary>El Roy Situmorang (2305551105)<br>

[![GitHub](./assets/ico/social/gh.svg)](https://github.com/el-ang)&nbsp;&nbsp;[![Instagram](./assets/ico/social/ig.svg)](https://instagram.com/el.ang_)&nbsp;&nbsp;[![LinkedIn](./assets/ico/social/li.svg)](https://linkedin.com/in/el-ang)

</details>

**Kelas Mata Kuliah**:<br>24STIE05X021 - Pemrograman internet B

**Dosen Pengampu**:<br>Ir. I Nyoman Piarsa, ST., MT., IPM.

## Daftar Isi
- [Daftar Isi](#daftar-isi)
- [Struktur Repo](#struktur-repo)
- [PHP Dasar](#php-dasar)
   - <details><summary><a href="#variabel-operator--kondisi">Variabel, Operator, & Kondisi</a></summary>
   
      - [Form Ucapan](#form-ucapan)
      - [Kalkulator Sederhana](#kalkulator-sederhana)
      - [Ganjil/Genap](#ganjilgenap)
      - [Nilai Huruf](#nilai-huruf)
      - [Menu Makan](#menu-makan)
      - [Form Biodata](#form-biodata)
   
   </details>

   - <details><summary><a href="#loop--array">Loop & Array</a></summary>
   
      - [Daftar Barang](#daftar-barang)
      - [Daftar Mahasiswa](#daftar-mahasiswa)
      - [Daftar Harga](#daftar-harga)
      - [Baris Genap](#baris-genap)
      - [Data Mahasiswa](#data-mahasiswa)
      - [Nilai Mahasiswa](#nilai-mahasiswa)
   
   </details>
- [Web Dev](#web-dev)
- [Tribute](#tribute)
   - [License](LICENSE)

## Struktur Repo
```
ProgNet              # Repo Pemrograman Internet
├── assets              # Folder aset (stylesheet, gambar, font, dll)
│   ├── ...
│   └── img                # Folder gambar
│       ├── ...
│       └── snap            # Folder screenshot
├── licenses            # Folder lisensi
├── route               # Folder route (file PHP)
│   ├── 0                  # Folder tugas PHP Dasar - Variabel, Operator, & Kondisi
│   │   ├── calc.php          # Kalkulator Sederhana
│   │   ├── evenOdd.php       # Ganjil/Genap
│   │   ├── foodMenu.php      # Menu Makan
│   │   ├── formBio.php       # Form Biodata
│   │   ├── formGreet.php     # Form Ucapan
│   │   └── grade.php         # Nilai Huruf
│   └── 1                  # Folder tugas PHP Dasar - Loop & Array
│       ├── even.php          # Baris Genap
│       ├── itemList.php      # Daftar Barang
│       ├── priceList.php     # Daftar Harga
│       ├── studentData.php   # Data Mahasiswa
│       ├── studentList.php   # Daftar Mahasiswa
│       └── studentScore.php  # Nilai Mahasiswa
├── index.php        # Halaman utama
└── README.MD        # Panduan & dokumentasi
```

## PHP Dasar

### Variabel, Operator, & Kondisi
- Memahami penggunaan variabel dan tipe data dalam PHP.
- Mampu menggunakan operator aritmatika, logika, dan perbandingan.
- Dapat menerapkan struktur kontrol sederhana (*if*, *if-else*, *switch*).
- Mampu membuat aplikasi sederhana berbasis *form input*. 

#### Form Ucapan
Menampilkan form untuk menginput nama, lalu menampilkan ucapan kepada nama yang dimasukkan.
![Form Ucapan](./assets/img/snap/formGreet.png)

#### Kalkulator Sederhana
Menampilkan form untuk menginput dua angka dan memilih operasi aritmatika, lalu menampilkan hasilnya.
![Kalkulator Sederhana](./assets/img/snap/calc.png)

#### Ganjil/Genap
Form untuk menginput angka, lalu menampilkan apakah angka tersebut ganjil atau genap.
![Ganjil/Genap](./assets/img/snap/evenOdd.png)

#### Nilai Huruf
Form untuk menginput nilai angka, lalu menampilkan nilai huruf berdasarkan rentang nilai yang ditentukan.
![Nilai Huruf](./assets/img/snap/grade.png)

#### Menu Makan
Form pilihan menu makanan dengan *switch-case*, lalu menampilkan harga berdasarkan pilihan.
![Menu Makan](./assets/img/snap/foodMenu.png)

#### Form Biodata
Form untuk menginput biodata (nama, umur, jenis kelamin, dan alamat), lalu menampilkan data yang diinput.
![Form Biodata](./assets/img/snap/formBio.png)

### Loop & Array
- Memahami konsep perulangan (*looping*) di PHP seperti *for*, *while*, dan *foreach*.
- Memahami cara membuat dan mengakses *array (indexed & associative)*.
- Menggabungkan konsep *looping* dengan *array* untuk menampilkan data.

#### Daftar Barang
Menampilkan daftar barang di dalam *indexed array* dengan konsep *looping* melalui *list*.
![Daftar Barang](./assets/img/snap/itemList.png)

#### Daftar Mahasiswa
Menampilkan daftar mahasiswa di dalam *associative array* dengan konsep *looping* menggunakan *foreach* melalui *list*.
![Daftar Mahasiswa](./assets/img/snap/studentList.png)

#### Daftar Harga
Menampilkan daftar barang beserta harganya di dalam *associative array* dengan konsep *looping* melalui tabel.
![Daftar Harga](./assets/img/snap/priceList.png)

#### Baris Genap
Menampilkan bilangan genap dari masukan angka awal hingga angka akhir menggunakan *for loop*.
![Baris Genap](./assets/img/snap/even.png)

#### Data Mahasiswa
Menampilkan data mahasiswa (nama, nim, umur, dan prodi) di dalam *multidimensional array* dengan *looping* melalui tabel.
![Data Mahasiswa](./assets/img/snap/studentData.png)

#### Nilai Mahasiswa
Menampilkan data nilai mahasiswa (nama, nim, nilai, dan keterangan lulus/tidak lulus) di dalam *multidimensional array* dengan *looping* dan kondisi melalui tabel.
![Nilai Mahasiswa](./assets/img/snap/studentScore.png)

## Web Dev

## Tribute
[**© 2025 El Roy Situmorang**](licenses/LICENSE)

[Space Mono Font](https://github.com/googlefonts/spacemono) by [Colophon Foundry](https://instagram.com/colophonfoundry), distributed by [Google Fonts](https://fonts.google.com/specimen/Space+Mono)

[Boxicons](https://boxicons.com) by [Atisa](https://github.com/atisawd)

[Material Design Icons](https://github.com/google/material-design-icons) originated by [Google](https://google.com) and [Material Extension Icons](https://github.com/material-extensions/vscode-material-icon-theme) by [Philipp Kief](https://github.com/PKief)

[OverlayScrollbars](https://kingsora.github.io/OverlayScrollbars) by [Rene Haas](https://github.com/KingSora)

<sup><b>PROGRAM STUDI SARJANA TEKNOLOGI INFORMASI<br>FAKULTAS TEKNIK<br>UNIVERSITAS UDAYANA<br>GANJIL 2025/2026</b></sup>