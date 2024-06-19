# Travellin-Java

### Anggota Tim: C624-PS107
- (F3226XB223) – (Rahmatul Idami)
- (F0096XB254) – (Adinda Ginta Purani)
- (F0096XB274) – (Naffa Amalia Fitri)

### Latar Belakang
<img src="https://drive.google.com/uc?export=view&id=1DWpHCo-vyMF7qGcqPTejqlxcFPPhLZTQ" alt="Logo website" width="400">
Website `Travellin Java` adalah sebuah platform yang dirancang untuk memudahkan wisatawan dalam menjelajahi Pulau Jawa. Website ini menyediakan berbagai fitur dan informasi penting tentang destinasi wisata, termasuk detail dan foto dari tempat-tempat wisata tersebut.

Berikut link deploynya: [Travellin Java](https://travellinjava.my.id/)

 
### CARA MENJALANKAN PROJECT

Ikuti langkah-langkah berikut untuk menjalankan project ini:
##### 1. Clone Repository
```bash
git clone https://github.com/rahmatulidami/Travellin-Java/tree/main/Travellin-Java-APP
```
##### 2. Install Composer
```bash
composer install
```
atau 
```bash
composer update
```
##### 3. Copy file .env.example ke .env dan setting nama database
```bash
cp .env.example .env
```
##### 4. Generate key application
```bash
php artisan key:generate
```
##### 5. Jalankan database migration dan seeding
```bash
php artisan migrate --seed
```
##### 6. Jalankan Project
```bash
php artisan serve
```
