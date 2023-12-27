# cara menggunduh file zip dan composernya
tekan file Zip/composer nya kemudian tekan view file(view raw)kemudian save
# web template menggunakan card uji.html
![alt text](https://github.com/rusdy-cyber/web/blob/main/1.png?raw=true)
# instalasi
jangan menggunakan penerjemah halaman untuk hasil maksimal
## jika ingin menggunakn git
```
git clone https://github.com/rusdy-cyber/web.git
```
## plagin yang di buthkan
- laravel artisan
- Laravel namespace
- Laravel blade snippets
- Laravel blade spacer
- Laravel goto controller
- Laravel goto view
- Laravel snippets
- Prettier-code formatter
- Laravel blade formatter
## membuat proyek di dalam file 
- pertama buat file kemudian
- buka visual open folder yang sudah di buat kemudian buka terminal visual dengan menekan
```
ctrl + `
```
- selanjutnya masukkan perintah ini untuk meng crate laravelnya
```
composer create-project laravel/laravel="10.*" .
```
## membuat proyek di dalam terminal
- buka cmd dan pilih lokasi disk yang ingin di gunakan
- :D untuk pindah disk
```
:D
```
- dir untuk melihat isi derektori
```
dir
```
- cd untuk pindah deektori
```
cd
```
- masukkan perintahnya
- dan open file pada visual
```
composer create-prject laravel/laravel nama_projeknya
```
membuka di broswer
```
Php artisan serve
```
membuat controler
- cara pertama di terminal
```
php artisan make:controller LoginRegisterController
```
- cara kedua tekan pada kyboard
```
ctrl+shift+p
```
- kemudian tekan pada colom
- lalu tuliskan nama controlernya kemudian enter dan pilih opsi basik
```
Artisan:Make Controller
```
migrasi database
- di sarankan lengkapi data pada seder baru melakukan migrasi dan di iringi migrasi sederr untuk meningkatkan keberhailaan
```
Php artisan migrate
```
menjalankan seder untuk mengisi data dami
```
db:seed -–class=UserSeeder
```
membuat cek level atau midwalre
```
php artisan make:middlewareCheckLevel
```
