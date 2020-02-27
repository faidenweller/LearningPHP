SQL ve MySQL arasındaki temel fark; SQL bir DİL iken, MySQL bir üründür.

Tüm bu ilişkisel veritabanları (MySQL,MSQL,Oracle vb.) yönetim sistemleri dil oalrak SQL kullanırlar
Her birinin kullandığı SQL dilinde küçük farklılıklar olsa da temel de hepsi SQL dilini kullanırlar.
Örnek; Türkiye'de konuşulan dil Türkçe'dir fakat bazı şehirlerde lehçe'de değişiklikler olsa da temelde konuşulan dil Türkçe'dir.



(DATABASE OLUŞTURMAK)
Create database udemy_test; //udemy_test veri tabanını oluşturduk
Drop database udemy_test; //udemy_test veri tabanını kaldırdık
Show databases; //tüm verileri ister



(TABLO OLUŞTURMAK)
Create table Uyeler(test); //Uyeler için tablo oluşturduk.
Rename table uyeler To users; // uyeler tablosunun adını users yapmak için kullandık
Drop users; //users tablosunu silmek için kullanılır

(COLUMN(SÜTUN)OLUŞTURMAK)
Alter table users Add Column user_id int // Users tablosuna integer türünde bir sütun ekledik
Alter table users Add Column (      // Users tablosuna birden fazla sütun eklemek için kullanılır.
    user_name varchar (255),
    user_email (255)
)
Alter table users add Column user_password varchar(255) //Users tablosundaki user_name sütunundan sonraki sütuna user_password sütununu koyar.
after user_name
first test2 //ilk sütuna ekler
last test3 // son sütuna ekler
Alter table users drop column test2; // Users tablosundaki test2 sütununu siler.
Alter table users Change user_id user_nick int // Users tablosundaki user_id sütununun ismini değiştirmek için kullanılır.


(PRIMARY KEY VE AUTO INCREMENT KOLONLAR)

Alter table uyeler Add Primary Key (ad) // ada gelen değerler birbirinden benzersiz, eşsiz olmak gerekiyor

id int auto_increment // bir kolon auto increment olarak belirlendiğinde onun içindeki değerler otomatik oalrak artışa geçer yani
yeni bir üye eklendiğinde örneğin üyenin adı 1den başlıyor 2,3,4,5 diye bunu bizim kendimizin girmesi gerekmiyor id'yi genelde ato increment olarak belirleriz
ve primary key'i de id olarak belirleriz ki hem unique olsun yani id'ler birbirine karışmasın diye.

(TABLOLARI VE SÜTUNLARI DETAYLI İNCELEME)

Tabloların/sütunların ayrıntılarına bakar

4 şekilde de inceleyebiliriz.

1- EXPLAIN users; // şeklinde kullanılabilir
2- DESCRIBE users;
3- SHOW FIELDS FROM users;
4- SHOW COLUMNS FROM users; // Show columns from udemy_test.users; alternatif çalıştırma yöntemi

--Tabloları Listelemek için--

SHOW TABLES;

information_schema //mysql ile ilgili bir çok bilgi verir. örnegin bir sütunun erişim türünü bize söyler
Select*From information_schema.TABLES
Where TABLE.SCHEMA ='udemy_test';  // udemy_test'in içindeki tüm bilgileri detaylı bir şekilde ekranda bize gösterir.

(MYSQL VERİ TÜRLERİ)

1-) Metinsel (String) Veri Türleri
a-) CHAR(boyut) // bu veri tipi 0 ile 255 karakter arasında veri tutmak için kullanılır. Devamlı benzer ya da eğişmeyen verileri kullanmak için kullanabiliriz. Örnek TC kimliknumaraları
b-) VARCHAR(boyut) // MYSQL 5.0.3 ürümünden önce 255 karakter veri saklanabiliyordu. Güncellemeden sonra bu 65bin'e çıkarıldı. Saklayacagımız alan sürekli değişkense Char() yerine Varchar() kullanırız
c-) TINYTEXT // en fazla 255 karaktere kadar metinsel ifadeleri saklar
d-) TEXT // en fazla 63.535(64KB) karaktere kadar metinsel ifadeleri saklar
e-) MEDIUMTEXT // 16.777.215 (16MB) karaktere kadar metinsel ifadeleri saklar
f-) LONGTEXT // 4.294.967.295 (4GB) karaktere kadar metinsel ifadeleri depolayabilir

2-) Sayısal (Numeric) Veri Türleri

a-) TINYINT (boyut) // -128 ile 127 arasında değer alır. Boyut alabileceği sınırı belirleyebiliriz.
b-) SMALLINT (boyut) // -32.768 ile -32.767 arasında değer alır. Boyut alabileceği sınır belirleyebiliriz.
c-) MEDIUMINT // -8.388.608 ile 8.388.607 arasında değer alır. Boyut alabileceği sınırı belirleyebiliriz.
d-) INT // -2.147.483.648 ile 2.147.483.647 arasında değer alır. Boyut alabileceği sınırı belirleyebiliriz.
e-) BIGINT // -9.223.372.036.854.775.808 ile 9.223.036.854.775.807 arasında değer alır. Boyut alabileceği sınırı belirleyebiliriz.
f-) FLOAT (boyut,x) // Küçük rakamlı virgüllü ifadeler için kullanılır. bouyt kısmına 5 yazarsak en fazla 5 basamaklı bir sayı oluşur. Virgülden sonra x kısmına 2 yazarsak virgülden sonra 2 basamaklı oldugunu söylemiş oluruz. Enfazla 23 basamaklı olabilir
g-) DOUBLE // Büyük rakamlı virgüllü ifadeler için kullanılır. Boyut değeri en fazla 53 olabilir
ğ-) DECIMAL // DOUBLE'ın yetmediği yerde kullanılır. Boyut değeri en fazla 65 olabilir

3-) Tarih-Zaman (Date-Time) Veri Türleri

a-) DATE() // Sadece tarih girişini için kullanılır. 'YYYY-AA-GG' şeklinde depolama yapar. 1000-01-01 ile '9999-12-31' arasındaki tarihleri belirler
b-) DATETIME() // Tarih ve saat kombinasyonu için kullanılır. 'YYYY-AA-GG SS-DD-SS' şeklinde depolama yapar.
c-) TIMESTAMP() // Depolama biçimi DateTime ile aynıdır. Tek fark o anki tarihi ve saati otomatik ekler. Manuel olarak girilecekse DateTime kullanılır
d-) TIME() // Sadece saat girişi için kullanılır.
e-) YEAR() // 2 veya 4 basamaklı YIL bilgisini saklamak için kullanılır.4 basamaklı verilerde 1901 ile 2155 arası değer saklanır.2 Basamaklıda ise 70 ile 69 (1970-1969) değeri saklanır

(REZERVE EDİLMİŞ KELİMELERİN KULLANIMI)

MYSQL'in kullandığı kelimelerle herhangi bir veri türü oluşturamayız, hata verir. Örnneğin CREATE TABLE table; yapamayız
Kullana bilmek için CREATE TABLE ``table` yaparız


CRUD NEDİR ? CREATE,READ,UPTADE,DELETE baş harflerinden oluşan bir kelimedir. Kısaca oluşturmak, okumak, güncellemek, silmek anlamı taşır.

(VERİ EKLEME (INSERT))

Insert Into users Set
user_name = 'farukdemir',
user_password = '010187',
user_email= 'demir.faruk@outlook.com.tr' // bu sekilde ekleriz. ya da ;

Insert into users
(user_name, user_password, user_email),
Values
('farukdemir','010187','farukdemir@outlook.com.tr');

(VERİ ÇEKME (SELECT))

Select * From users   // Okunuşu; bütün kolonları Users tablosundan çek
Select user_name,user_email From users // bütün kolonlardaki user_name ve user_email değerlerini users tablosundan çek
Select user_name as name ,user_email as email From users // User kısmını sildik name ve email seklinde gözükmesini istiyoruz

(VERİ GÜNCELLEME (UPDATE))

Update users Set
user_name = 'Faruk'
WHERE user_id = 2;

(VERİ SİLME (DELETE))

DELETE


(WHERE CÜMLECİĞİ)

= eşit
!= eşit değil
> büyük
< küçük
>= büyük ya da eşit
<= küçük ya da eşit
&& VE
|| ya da

Select * From users
where uye_id != 3  // Üye idsi 3 olmayanları çek göster

Select * From users
where uye_id = 3 || uye_id= 4 // Üye idsi 3 ya da 4 ü çek göster

(VERİLERDE SIRALAMA (ORDER BY))

Büyükten küçüğe ya da küçükten büyüğe sıralama yapma işlemidir

Select*From bolumler
order by id desc(asc) // id sıralamasını büyükten küçüğe doğru sıralar. Asc dersek küçükten büyüğe doğru sıralar


(VERİLERDE LİMİT)

Select * From users
Limit 2 // ilk 2 değeri gösterir

Select * From users
Order by Desc
Limit 2 // büyükten küçüğe sıraladık ilk 2 büyük değeri gösterecek

Select * From users
Order by Desc
Limit 2,2 //2. sıradan basla diğer 2 değeri göster

(VERİLERDE GRUPLAMA(GROUP BY) VE HAVING KULLANIMI)











