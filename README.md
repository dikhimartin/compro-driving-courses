<p align="left">
    <a href="https://binadrive.dikhimartin.tech/" target="_blank"><img src="https://raw.githubusercontent.com/dikhimartin/compro-driving-courses/main/my-project/public/assets/images/logo-bina-drive-black.png" width="400" alt="Bina Drive Logo">
    </a>
</p>
Demo : https://binadrive.dikhimartin.tech

------



# Company profile - Driving Courses

## Penjelasan 

Saya membuat project ini, karena untuk melengkapi satu tugas individu di Universitas. Jadi saya diminta untuk membuat suatu website company profile dengan kriteria sebagai berikut :

```
Sebuah perusahaan pembelajaran stir mobil ingin membuat website untuk company profile yang dimiliki
akan tetapi mereka tidak mempunyai bayangan bagaimana bentuk websitenya, 
kemudian terdapat beberapa hal yang ingin ada dalam website tersebut, antara lain:

- Jadwal belajar stir mobil
- Paket jasa yang ditawarkan
- Nama – nama trainer stir mobil dan pengurus
- Kendaraan yang disediakan baik manual dan matic 
  (jumlahnya ditentukan oleh rekan – rekan untuk banyak mobil yang dimiliki).
- Lokasi dan kontak perusahaan.

Buatlah se atraktif mungkin untuk website yang diminta 
sehingga perusahaan stir mobil menjadi menarik untuk dikunjungi.

Tech Stack Requirement : 
- Laravel Framework >= 5.6 

source : 20220629154838_TP1-W2-S3-R1
```


Dari kriteria tersebut dapat di definisikan beberapa menu yang ada dalam website, antara lain :

![](https://raw.githubusercontent.com/dikhimartin/compro-driving-courses/main/my-project/public/assets/images/layout/home-page.png)

- **Beranda**
  - Berisi penjelasan tentang perusahaan tersebut dan layanan-layanan yang di berikan. Selain itu ada juga yang berisi tentang kontak, alamat dan jam kerja tempat perusahaan tersebut. Terkadang juga memuat informasi resmi dari perusahaan tersebut yang perlu diketahui oleh masyarakat umum.
- **Tentang Perusahaan**
  - Tentang Kami
    - Menjelaskan tentang latar belakang perusahaan atau bisnis dari sebuah website.
  - Team Kami
    - Berisi informasi yang diperlukan oleh pengunjung website mengenai struktur organisasi , nama – nama trainer stir mobil dan pengurus dari suatu perusahaan.
- **Paket Kursus**
  - Berisi informasi tawaran Paket Latihan Mengemudi dengan beberapa pilihan.
- **Galeri**
  - Untuk menampilkan atau menyampaikan sebuah informasi  berupa gambar.
- **Kontak**
  - Berisikan informasi mengenai alamat email, nomor telepon, alamat perusahaan (peta lokasi), tautan media sosial, dan sebagainya. Dengan menyertakan semua informasi kontak, pengunjung pun dapat lebih percaya dengan semua konten yang Anda bagikan, baik itu informasi maupun penawaran.



## Cara menjalankan aplikasi

**Tech Stack :** 

- Docker Engine https://docs.docker.com/engine/install2. 
- Docker Compose https://docs.docker.com/compose/install
  

**Proses Instalasi Laravel**

- Install Docker Engine & Docker Compose.

- Tentukan Direktori project laravel, kemudian Buka terminal.

- Download file konfigurasi ```docker-compose.yml``` , menggunakan perintah **cURL Command** (tidak harus curl command, kamu bisa pakai banyak opsi lain yang support di terminal OS lain untuk transfer data dengan konektivitas URL).

  ```shell 
  curl -LO [https://raw.githubusercontent.com/bitnami/containers/main/bitnami/laravel/docker-compose.yml
  ```


  File docker-compose.yml

  ```yml
  version: '2'
  
  services:
    mariadb:
      image: docker.io/bitnami/mariadb:10.6
      environment:
        # ALLOW_EMPTY_PASSWORD is recommended only for development.
        - ALLOW_EMPTY_PASSWORD=yes
        - MARIADB_USER=bn_myapp
        - MARIADB_DATABASE=bitnami_myapp
    myapp:
      image: docker.io/bitnami/laravel:10
      ports:
        - '8000:8000'
      environment:
        - DB_HOST=mariadb
        - DB_PORT=3306
        - DB_USERNAME=bn_myapp
        - DB_DATABASE=bitnami_myapp
      volumes:
        - './my-project:/app'
      depends_on:
        - mariadb
  ```

- Jalankan framework Laravel 10 menggunakan command docker-compose up -d

- buka browser pada URL  http://localhost:8000
