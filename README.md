<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## [TODO] Challenge App
<p>Bu todoApp Challenge projesinde Laravel'in birçok noktasına değinilmiştir.</p>
<p>Laravel mimarisinin dışında mikroservis yapısı da dikkate alınmıştır. <b>Infrastructure</b> (Alt yapı) klasörü altında interface Service ve Repository pattern için Interface tanımlanmıştır.</p>
<p><b>Concrete</b> klasörü altında ana Repository ve Service yapıları mevcuttur. Service-Repository ile işlemler gerçekleştirilir. Controller da ise sadece servis ile iletişim söz konusudur.</p>
<p><b>Trait</b> yapılarında her yerde default kullanılabilecek methodlar tanımlanmıştır. Örn: Cache ve Return Message</p>
<p><b>Middleware</b> klasöründe yer alan ApiToken middleware ile OAuth mantığında bir Auth işlemi gerçekleştirilir ve istenilen route yapılarına tanımlanabilir.</p>
<p><b>Requests</b> klasörü altında validation işlemleri için FormRequest yapısı kullanılmıştır.</p>
<b>composer update</b> ve <b>php artisan serve</b> komutları ile ayağa kaldırın ve <b>Postman Collections</b> da yer alan ilgili URL bağlantılarına istek atın.

- <b>Kullanıcı Kayıt</b> : /api/auth/register
- <b>Kullanıcı Giriş</b> : /api/auth/login
- <b>Ürün Oluşturma</b>  : /api/product_create
- <b>Ürün Güncelleme</b>  : /api/product_update
- <b>Ürün Detay Görüntüleme</b>  : api/product_detail/{id}
- <b>Tüm Ürünleri Görüntüleme</b>  : api/all_products




