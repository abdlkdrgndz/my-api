<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## [TODO] Challenge restApi Application
<p>Bu todoApp restApi uygulamasında Laravel'in birçok özelliği kullanılmaya çalışılmıştır. Laravel mimarisinin dışında mikroservis mimarisi de dikkate aldım. Genel Restful API kurallarını da uyguladım.</p>
<p>Bu uygulama ile kullanıcı kaydı oluşturma, giriş yapma ve kayıt gerçekleştirirken device platform bilgileri alınarak device tablosuna eklenmektedir. Bunun dışında ürün oluşturma, ayrıntı görüntüleme, güncelleme ve silme gibi CRUD işlemleri yapılmaktadır.</p>
<p><b>Infrastructure</b> (Alt yapı) klasörü altında interface Service ve Repository pattern için Interface tanımlanmıştır.</p>
<p><b style="background: #0A7BBB; padding:4px; border-radius: 5px;">Concrete</b> klasörü altında ana Repository ve Service yapıları mevcuttur. Service-Repository ile işlemler gerçekleştirilir. Controller da ise sadece servis ile iletişim söz konusudur.</p>
<p><b style="background: #ef600e; padding:4px; border-radius: 5px;">Trait</b> yapılarında her yerde default kullanılabilecek, tekrarı engelleyen methodlar tanımlanmıştır. Örn: Cache ve error mesajları için tanımlamalar yapılmıştır. <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/blob/main/app/Traits/Responder.php">[bkz]</a></p>
<p><b style="background: #ef600e; padding:4px; border-radius: 5px;">Middleware</b> klasöründe yer alan ApiToken middleware ile OAuth mantığında bir Auth işlemi gerçekleştirilir ve istenilen route yapılarına tanımlanabilir.</p>
<p><b style="background: #EF3B2D; padding:4px; border-radius: 5px;">Requests</b> klasörü altında validation işlemleri için FormRequest yapısı oluşturulmuştur. <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/tree/main/app/Http/Requests/Products">[bkz]</a></p>
<p><b style="background: #EF3B2D; padding:4px; border-radius: 5px;">Log</b> işlemleri için <a target="_blank" href="https://github.com/spatie/laravel-activitylog">ActivityLog</a> kütüphanesi kullanılmıştır. Laravel'in Model Observer yapısına uygun, veritabanı CRUD hareketlerini takip edip log işlemlerini model üzerinden otomatik olarak veritabanına kaydetmektedir. <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/blob/main/app/Models/ProductModel.php">[bkz]</a></p>
<p><b style="background: #891f72; padding:4px; border-radius: 5px;">Data Transfer Object</b> yapısı ile eşdeğer Resources(Collection) kullanılarak ürünlerin ayrıntılı meta bilgileri ile standart json tipi veri dönüş işlemleri <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/blob/main/app/Concrete/Service/ProductService.php">ProductService</a> içinde index metodunda yapılmıştır. <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/blob/main/app/Http/Resources/ProductDTO.php">[bkz]</a> </p>
<p><b>Seeder</b> yapısı kullanılarak ProductSeeder oluşturulmuştur. <a target="_blank" href="https://github.com/abdlkdrgndz/my-api/blob/main/database/seeders/ProductSeeder.php">[bkz]</a></p>
<p><b>Sonuçlar:</b></p>
<img src="https://github.com/abdlkdrgndz/my-api/blob/main/public/images/output1.PNG" alt="">
<hr>
<img src="https://github.com/abdlkdrgndz/my-api/blob/main/public/images/output2.PNG" alt="">
