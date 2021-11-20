<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## [TODO] Challenge App
<p>Bu todoApp uygulamasında Laravel'in birçok noktasına değinilmeye çalışılmıştır.</p>
<p>Laravel mimarisinin dışında mikroservis yapısı da dikkate alınmıştır. <b>Infrastructure</b> (Alt yapı) klasörü altında interface Service ve Repository pattern için Interface tanımlanmıştır.</p>
<p><b>Concrete</b> klasörü altında ana Repository ve Service yapıları mevcuttur. Service-Repository ile işlemler gerçekleştirilir. Controller da ise sadece servis ile iletişim söz konusudur.</p>
<p><b>Trait</b> yapılarında her yerde default kullanılabilecek methodlar tanımlanmıştır. Örn: Cache ve Return Message</p>
<p><b>Middleware</b> klasöründe yer alan ApiToken middleware ile OAuth mantığında bir Auth işlemi gerçekleştirilir ve istenilen route yapılarına tanımlanabilir.</p>
<p><b>Requests</b> klasörü altında validation işlemleri için FormRequest yapısı oluşturulmuştur.</p>
<p><b>Log</b> işlemleri için <a target="_blank" href="https://github.com/spatie/laravel-activitylog">ActivityLog</a> kütüphanesi kullanılmıştır. Laravel'in model observer yapısına uygun, veritabanı CRUD hareketlerini takip edip log işlemlerini model üzerinden otomatik olarak veritabanına kaydetmektedir.</p>


