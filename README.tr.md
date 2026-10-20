# ⚡ ApexCommerce · Modern D2C WooCommerce Başlangıç Kiti

[🇬🇧 English](README.md) · [🇹🇷 Türkçe](README.tr.md)

> Tüketici markaları için modern, dönüşüm odaklı WooCommerce mağaza başlangıç kiti. Hantal sayfa oluşturucular veya pahalı aylık abonelik uygulamaları gerektirmeden; yerel açılır sepet çekmecesi, yapışkan satın alma butonu ve sade ürün sunumu ile geliştirilmiştir.

Geliştirici ve Bakım Sorumlusu: **[Harun Sekmen](https://github.com/harunsekmen)** — E-Ticaret Sistem Mühendisi & WooCommerce Uzmanı.

[✉️ İletişime Geç](mailto:sekmenwp@gmail.com) · [💼 Upwork Profili](https://www.upwork.com/freelancers/~01a7a8b58043e6e6d9) · [🔗 GitHub Ana Profil](https://github.com/harunsekmen)

---

## 📸 Görsel Önizlemeler ve Yönetim Paneli

### 1. Minimalist Ürün Sayfası Sunumu
Tüketici markaları için özel olarak tasarlanmış net fiyatlandırma, müşteri yorumları ve belirgin harekete geçirici buton içeren modern yerleşim:

![ApexCommerce D2C Vitrin Önizlemesi](docs/assets/d2c-storefront-hero.png)

### 2. Yerel Açılır Sepet Çekmecesi (Slide Cart Drawer)
Müşteriler sayfayı yeniden yüklemeden sepetlerini anında inceler. Dinamik ücretsiz kargo ilerleme çubuğu içerir:

![ApexCommerce Sepet Çekmecesi Önizlemesi](docs/assets/slide-cart-drawer-preview.png)

---

## ⚡ Çözdüğü Kritik Sorun

WooCommerce ile yeni mağaza açan birçok marka sahibi şu zorluklarla karşılaşır:
- **Hantal Sepet Akışları:** Varsayılan WooCommerce sepeti, her ürün eklemede sayfayı yeniden yükler veya müşteriyi incelediği üründen koparır.
- **Mobilde Kaybolan Satın Al Butonu:** Müşteri ürün açıklamalarını, yorumları ve detayları okumak için aşağı kaydırdığında satın alma butonu ekrandan kaybolur.
- **Aşırı Eklenti ve Tema Yükü:** Tipik hazır temalar onlarca gereksiz eklenti ve ağır kod kütüphanesiyle gelerek mobil açılış hızını düşürür ve mağaza yönetimini zorlaştırır.

**ApexCommerce**, doğrudan WooCommerce standartları üzerine inşa edilmiş hafif ve modüler bir temel sunar. Kod tabanını temiz ve bakımı kolay tutarken, lider D2C markalarından beklenen hızlı ve akıcı alışveriş deneyimini sağlar.

---

## 🛠️ Öne Çıkan Özellikler

- **Açılır AJAX Sepet Çekmecesi:** Ürün eklendiğinde anında güncellenir, müşterinin katalogda kesintisiz gezinmesini sağlar.
- **Ücretsiz Kargo İlerleme Çubuğu:** Müşteriye ücretsiz kargoya ne kadar kaldığını dinamik olarak göstererek ortalama sepet tutarını artırır.
- **Yapışkan Satın Alma Çubuğu (Sticky ATC):** Mobilde ve masaüstünde ürün detayları incelenirken satın alma butonu her an görünür kalır.
- **Sadeleştirilmiş Ödeme Alanları:** Gereksiz form kalabalığını kaldırarak müşterilerin siparişlerini hızlı ve sorunsuz tamamlamasını sağlar.

---

## 🏗️ Teknik Mimari ve Standartlar

`PHP 8.1+` • `WooCommerce HPOS` • `Vanilla ES6+` • `Modern WordPress Block Standards`

---

## 🚀 Kurulum ve Test

1. Eklentiyi veya temayı WordPress sitenize yükleyin:
   ```bash
   git clone https://github.com/harunsekmen/apex-commerce-d2c-starter.git wp-content/plugins/apex-commerce-d2c-starter
   ```
2. WP Admin veya WP-CLI üzerinden etkinleştirin:
   ```bash
   wp plugin activate apex-commerce-d2c-starter
   ```
3. Test paketini çalıştırın:
   ```bash
   php tests/test-apex.php
   ```

---

## 📄 Lisans

Bu proje **GPL-3.0 Lisansı** ile açık kaynak olarak sunulmaktadır.
