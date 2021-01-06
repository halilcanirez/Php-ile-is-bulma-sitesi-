-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Eyl 2020, 12:40:41
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `isinibul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `basvurular`
--

CREATE TABLE `basvurular` (
  `id` int(100) NOT NULL,
  `onecikar` int(10) NOT NULL,
  `uygunlukdurumu` int(100) NOT NULL,
  `uyid` int(100) NOT NULL,
  `ilanid` int(100) NOT NULL,
  `ozgecmisid` int(100) NOT NULL,
  `sirketid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `basvurular`
--

INSERT INTO `basvurular` (`id`, `onecikar`, `uygunlukdurumu`, `uyid`, `ilanid`, `ozgecmisid`, `sirketid`) VALUES
(39, 0, 0, 49, 1, 9, 0),
(40, 0, 0, 49, 2, 9, 0),
(41, 1, 0, 49, 6, 9, 1),
(42, 1, 0, 51, 6, 7, 1),
(46, 0, 0, 49, 8, 8, 1),
(50, 0, 0, 53, 8, 13, 1),
(51, 1, 0, 49, 14, 8, 9),
(53, 0, 0, 53, 14, 13, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isilanları`
--

CREATE TABLE `isilanları` (
  `id` int(10) UNSIGNED NOT NULL,
  `durumu` int(10) NOT NULL,
  `ilanbaslıgı` varchar(100) NOT NULL,
  `isinismi` varchar(100) NOT NULL,
  `sirketismi` varchar(50) NOT NULL,
  `sirketid` int(100) NOT NULL,
  `ulkesehir` varchar(10) NOT NULL,
  `sehirid` int(100) NOT NULL,
  `aranannitelikler` varchar(500) NOT NULL,
  `istanımı` varchar(500) NOT NULL,
  `tecrübe` varchar(100) NOT NULL,
  `askerlikdurumu` varchar(100) NOT NULL,
  `egitimseviyesi` varchar(100) NOT NULL,
  `firmasektörü` varchar(50) NOT NULL,
  `katagori` varchar(100) NOT NULL,
  `calısmasekli` varchar(100) NOT NULL,
  `pozisyonseviyesi` varchar(100) NOT NULL,
  `personelsayısı` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `isilanları`
--

INSERT INTO `isilanları` (`id`, `durumu`, `ilanbaslıgı`, `isinismi`, `sirketismi`, `sirketid`, `ulkesehir`, `sehirid`, `aranannitelikler`, `istanımı`, `tecrübe`, `askerlikdurumu`, `egitimseviyesi`, `firmasektörü`, `katagori`, `calısmasekli`, `pozisyonseviyesi`, `personelsayısı`) VALUES
(1, 0, 'oeratör', 'Depo Operatörü', 'LC Waikiki', 0, 'İstanbul', 2, 'En az İlköğretim ya da Lise mezunu,\r\nErkek adaylar için askerlik görevini tamamlamış,\r\nVardiyalı ve esnek çalışma saatlerine uyum sağlayabilecek,\r\nİstanbul Avrupa Yakası\'nda ikamet eden,', 'Esenyurt\'ta bulunan Yurtiçi Lojistik Merkezi süreçlerimizin operasyon alanında görevlendirilecek Bay/Bayan Depo Operatörleri arıyoruz.\r\n\r\n\r\nNot:“Başvurular yıl boyunca yapılabilir , personel talebi geldiğinde tarih sırasına göre adaylar davet edilmektedir.” ', ' Tecrübeli ya da tecrübesiz adaylar.', 'Yapıldı , Muaf', 'İlk Öğretim(Mezun), Lise(Öğrenci), Lise(Mezun), Ön Lisans(Öğrenci), Üniversite(Öğrenci)', ' Tekstil', 'Lojistik', 'Sürekli / Tam zamanlı', 'İşçi ve Mavi Yaka', '\r\nBelirtilmemiştir'),
(2, 1, 'oeratör', 'Depo Elemanı', 'LC Waikiki', 0, 'İstanbul', 0, 'En az İlköğretim ya da Lise mezunu,\r\nErkek adaylar için askerlik görevini tamamlamış,\r\nVardiyalı ve esnek çalışma saatlerine uyum sağlayabilecek,\r\nİstanbul Avrupa Yakası\'nda ikamet eden,', 'Esenyurt\'ta bulunan Yurtiçi Lojistik Merkezi süreçlerimizin operasyon alanında görevlendirilecek Bay/Bayan Depo Operatörleri arıyoruz.\r\n\r\n\r\nNot:“Başvurular yıl boyunca yapılabilir , personel talebi geldiğinde tarih sırasına göre adaylar davet edilmektedir.” ', ' Tecrübeli ya da tec', '', 'İlk Öğretim(Mezun), Lise(Öğrenci), Lise(Mezun), Ön Lisans(Öğrenci), Üniversite(Öğrenci)', ' Tekstil', 'Lojistik', 'Sürekli / Tam zamanlı', 'İşçi ve Mavi Yaka', '\r\nBelirtilmemiştir'),
(3, 1, 'oeratör', 'Depo Operatörü', 'LC Waikiki', 146, 'İstanbul', 0, 'En az İlköğretim ya da Lise mezunu,\r\nErkek adaylar için askerlik görevini tamamlamış,\r\nVardiyalı ve esnek çalışma saatlerine uyum sağlayabilecek,\r\nİstanbul Avrupa Yakası\'nda ikamet eden,', 'Esenyurt\'ta bulunan Yurtiçi Lojistik Merkezi süreçlerimizin operasyon alanında görevlendirilecek Bay/Bayan Depo Operatörleri arıyoruz.\r\n\r\n\r\nNot:“Başvurular yıl boyunca yapılabilir , personel talebi geldiğinde tarih sırasına göre adaylar davet edilmektedir.” ', ' Tecrübeli ya da tecrübesiz adaylar.', 'Yapıldı , Muaf', 'İlk Öğretim(Mezun), Lise(Öğrenci), Lise(Mezun), Ön Lisans(Öğrenci), Üniversite(Öğrenci)', ' Tekstil', 'Lojistik', 'Sürekli / Tam zamanlı', 'İşçi ve Mavi Yaka', '\r\nBelirtilmemiştir'),
(4, 1, 'aceanteyöneticisi', 'Terazidere Acente Yöneticisi', 'Aras Kargo', 1, 'İstanbul', 34, 'Türkiye’nin dört bir yanına ve dünyanın 227 ülkesine ‘önem’ taşıyan Aras Kargo, 41 yıldır müşterilerine, paydaşlarına ve ülke ekonomisine katma değer sağlamak için çalışıyor. Mutluluğa adanmış gücüyle ve hizmetleriyle fark yaratan Aras Kargo, teknoloji ve güçlü insan kaynağını birleştiren yenilikçi iş modeliyle, sektöründe ilk tercih edilen marka olmak için çalışmalarını sürdürüyor. Kargo sektörünün lideri Aras Kargo bugün, müşteri memnuniyeti odaklı 13 Bölge Müdürlüğü, 29 Transfer Merkezi, 900 ', '', ' En az 2 yıl tecrübeli adaylar', 'Yapıldı, Muaf', 'Üniversite(Mezun), Yüksek Lisans(Öğrenci), Yüksek Lisans(Mezun), Doktora(Öğrenci)', ' Kargo - Kurye', 'Operasyon', ' Sürekli / Tam zamanlı', 'Uzman', ' Belirtilmemiştir'),
(6, 1, 'ilan2', 'Özlük İşleri Operasyon Uzmanı', 'Aras Kargo', 1, 'İstanbul', 34, 'Türkiye’nin dört bir yanına ve dünyanın 227 ülkesine ‘önem’ taşıyan Aras Kargo, 41 yıldır paydaşlarına ve ülke ekonomisine katma değer sağlamak için çalışıyor. Mutluluğa adanmış gücüyle ve hizmetleriyle fark yaratan Aras Kargo, teknoloji ve güçlü insan kaynağını birleştiren yenilikçi iş modeliyle, sektöründe ilk tercih edilen marka olmak için çalışmalarını sürdürüyor. Kargo sektörünün lideri Aras Kargo bugün, müşteri memnuniyeti odaklı 13 Bölge Müdürlüğü, 29 Transfer Merkezi, 900 şube, 4000\'den ', 'Bölüm için raporların hazırlanması,\r\nSGK, İş Kurumu vb resmi kurumlarla iletişimin yürütülmesi,\r\nPersonel işe giriş - işten çıkış süreçlerinin yürütülmesi,\r\nYıllık izin planlarının oluşturulması ve izinlerin takip edilmesi,\r\nYasal teşviklerin takibi ve uygulanması,\r\nBordro tahakkuk işlemlerine destek olunması,', 'En az 2 yıl tecrübeli adaylar', 'Yapıldı, Muaf', 'Üniversite(Mezun), Yüksek Lisans(Öğrenci), Yüksek Lisans(Mezun), Doktora(Öğrenci)', ' Kargo - Kurye', 'Operasyon', ' Sürekli / Tam zamanlı', 'Uzman', ' Belirtilmemiştir'),
(8, 1, 'ilan2erf', 'Kimya Öğretmeni', 'Gişe Eğitim', 1, 'İstanbul', 34, 'Aranan Nitelikler\r\nAlanında en az 3 yıl deneyimli,\r\nÜniversitelerin ilgili bölümlerinden mezun,\r\nLisans, yüksek lisans ya da doktora mezunu,\r\nPedagojik formasyonu olan,\r\nİletişim gücü yüksek,\r\nEğitim teknolojilerini kullanabilen,\r\nDinamik, güleryüzlü, takım çalışmasına yatkın Kimya Öğretmeni aranmaktadır.', 'İş Tanımı\r\nÖzel Bağcılar Nazmi Arıkan Fen Bilimleri Kursu\'nda görevlendirilmek üzere Kimya Öğretmeni alımı yapılacaktır.', 'Tecrübeli', 'Yapıldı, Muaf', 'Ön Lisans(Mezun), Üniversite(Mezun), Yüksek Lisans(Öğrenci), Yüksek Lisans(Mezun), Doktora(Öğrenci),', 'Eğitim', 'Eğitim', ' Sürekli / Tam zamanlı', 'Uzman', ' Belirtilmemiştir'),
(13, 1, 'sgserf', 'Kalite Müdürü', 'TekSüt', 1, 'İstanbul', 34, '\r\nKalite Yönetim Sisteminin tüm süreçlerde etkin kullanımını sağlamak,\r\nSüreç yönetimi faaliyetlerine rehberlik etmek,\r\nSüreçler arası iletişim ve koordinasyonu sağlamak,\r\nİç denetimleri organize etmek, gerçekleştirmek ve raporlamak,\r\nÜrün sertifikalandırma ve belgelendirme çalışmalarını koordine etmek,\r\nMüşteri isteklerine uygun üretim yapılabilmesi için proses kontrol sistemlerini kurmak ve bu sistemlerin etkinliğini sağlamak,\r\nİyileştirme faaliyetlerini koordine etmek,\r\niyileştirme aksiyonlar', 'Süt ve Süt ürünleri sektöründe Türkiye ’nin önde gelen firmalarından “TEKSÜT SÜT MAMÜLLERİ SAN. VE TİC. A.Ş” bünyesinde görevlendirmek üzere aşağıdaki niteliklere sahip \"KALİTE MÜDÜRÜ\" aramaktayız. \r\n\r\nÜniversitelerin ilgili bölümünden mezun,\r\nÜretim alanında en az 10 yıl deneyimli,\r\nGıda Güvenliği Yönetim Sistemleri dokümantasyon ve süreç takibi konusunda deneyimli,\r\nİyi derecede İngilizce bilen,\r\nAnalitik becerileri güçlü, sonuç odaklı ve ekip çalışmasına yatkın,\r\nMS Office uygulamalarına haki', 'Deneyimli', 'Yapıldı', 'Ön Lisans(Mezun), Üniversite(Mezun), Yüksek Lisans(Öğrenci), Yüksek Lisans(Mezun), Doktora(Öğrenci),', 'Gıda', 'Üretim', 'Tam Zamanlı', 'Üst Düzey Yönetici', ' Belirtilmemiştir'),
(14, 1, 'bölgesatıştöneticisiilanı', 'Bölge Satış Yöneticisi', 'Iwallet Kurumsal Hizmetler A.Ş ', 9, '', 34, 'Kurumsal satış alanında tercihen büyük müşterilerde en az 3 yıl deneyimli\r\n\r\n.         Kurumsal müşteri portföyüne sahip\r\n\r\n·         MS Office uygulamalarını hakim\r\n\r\n·         Sürücü belgesine sahip ve aktif araç kullanabilen\r\n\r\n·         Erkek adaylar için askerlik görevini tamamlamış olmak', '·         iWallet Kurumsal ürünlerinin hedef bazlı saha satışı, satış sonrası hizmetleri, mevcut müşteri portföyünün geliştirilmesi ve yeni müşteri kazanılmasına odaklanarak satış sürecinin yönetilmesini sağlamak,\r\n\r\n·         Günlük iş akış süreçlerinde belirtilen görev sorumlulukları eksiksiz yerine getirmek,\r\n\r\n·         Şirket politikaları doğrultusunda mevcut müşteri portföyünü korumakla beraber, yeni müşteriler bulunması konusunda gerekli faaliyetleri gerçekleştirmek,\r\n\r\n·         Potansiy', 'Deneyimli', 'Yapıldı', 'Ön Lisans(Mezun), Yüksek Lisans(Öğrenci), Üniversite(Mezun), Yüksek Lisans(Mezun)', 'Hizzmet', 'Satış', 'Tam Zamanlı', 'Uzman', ' Belirtilmemiştir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isverenkullanıcılar`
--

CREATE TABLE `isverenkullanıcılar` (
  `durumu` int(10) NOT NULL,
  `id` int(100) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `sifre` int(100) NOT NULL,
  `sirketismi` varchar(300) NOT NULL,
  `adres` varchar(600) NOT NULL,
  `websitesi` varchar(100) NOT NULL,
  `sektor` varchar(100) NOT NULL,
  `kurulusyili` varchar(100) NOT NULL,
  `hakkında` varchar(10000) NOT NULL,
  `vizyonmisyon` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `isverenkullanıcılar`
--

INSERT INTO `isverenkullanıcılar` (`durumu`, `id`, `email`, `sifre`, `sirketismi`, `adres`, `websitesi`, `sektor`, `kurulusyili`, `hakkında`, `vizyonmisyon`) VALUES
(0, 1, 'şeftali@gmail.com', 123, 'Aras Kargo', 'Rüzgarlıbahçe Mahallesi Yavuz Sultan Selim Caddesi Aras Plaza No:2, 34820 Kavacık/Beykoz/İstanbul', 'https://www.araskargo.com.tr/tr/', 'Kargo - Kurye', '1979', '1979 yılında Celal Aras tarafından kurulan Aras Dağıtım ve Pazarlama, eriştiği dağıtım ağı gücüyle, bu gücün taşımacılıkta da kullanılması kararı alınarak 1989\'da faaliyete geçen Aras Kargo\'nun da temellerini oluşturmuştur. Kuruluşundan itibaren sektöre getirdiği yeniliklerle hizmet kalitesini geliştiren Aras Kargo, bugün; 13 bölge müdürlüğü, 29 transfer merkezi, 900\'e yakın şube, 4000\'den fazla araçtan oluşan filosu ve 14 bin kişiye yakın uzman kadrosuyla, her ay 12 milyon kişi, kurum ve kuruluşa hizmet veren, Türkiye\'nin en geniş erişim ağına sahip, öncü taşımacılık kuruluşudur.\r\n \r\nTürkiye\'nin marka patentine sahip, TSE belgeli ilk kargo kuruluşu olan  Aras Kargo,  kalite yönetimi sistemine odaklanarak, 2004 yılında ISO 9001:2000 belgesi almaya hak kazandı. Şirket, 2007 Yılında tüm paydaş ilişkilerinde kaliteyi yükseltmek, verimliliği arttırmak, rekabet gücünü korumak ve toplam kalite felsefesini bir kurum kültürü haline dönüştürmek amacıyla “EFQM (EUROPEAN FOUNDATION FOR QUALITY MANAGEMENT) Mükemmellik Modeli”ni kurumsal iş yapma biçimi olarak benimsemiştir. Verimlilik odağında benimsediği çevreci ve sürdürülebilir politikalarıyla Türk Standartları Enstitüsü’nün  Çevre Yönetim Sistemi ile İş Sağlığı ve Güvenliği Yönetim Sistemi belgelerini  almaya hak kazanan ilk Türk kargo şirketi olan Aras Kargo Müşteri Memnuniyeti Yönetim Sistemi belgesini  de aldı.\r\n \r\nHizmet kalitesi ve sektör ortalamasının üstünde büyümesiyle yerli ve yabancı yatırımcıların ilgisini çeken Aras Kargo’nun, 2011 yılında % 20 hissesini  İş Girişim satın almış, 2013 yılında ise Austrian Post, İş Yatırım’ın elinde bulunan % 20 hissenin yanı sıra Aras Kargo’dan % 5 oranında hisseyi satın alarak şirkete yüzde 25 oranında ortak olmuştur.\r\n \r\nTürkiye’de Kadınların Güçlenmesi Prensiplerini imzalayan ilk kargo şirketi olan ve Birleşmiş Milletler’de örnek gösterilen Aras Kargo, bu prensipler ışığında atacakları adımları da Birleşmiş Milletler’de kadınların güçlenmesi ve istihdamı için söz vererek duyurdu.\r\n \r\nDünyanın en büyük danışmanlık şirketlerinden Frost & Sullivan’ın  dünyada kargo sektöründe “Büyümede Mükemmellik Liderliği” (Growth Excellence Leadership Award) ödülüne layık gördüğü Aras Kargo,  Türkiye\'nin bütün il ve ilçelerinde 1.500\'ü aşkın yerleşim birimine hizmet götürüyor. Ayrıca 1600\'e yakın yerleşim merkezinde faaliyet gösteren mobil servislerle, hizmet sınırlarını her geçen gün daha da genişleterek yolunda emin adımlarla ilerlemeye devam ediyor.', 'VİZYONUMUZ\r\n\r\nSektörde ilk tercih edilen marka olmak.\r\n\r\nMİSYONUMUZ\r\n\r\nTopluma ve çevreye fayda sağlayan kargo hizmeti sunmak.\r\n\r\nDEĞERLERİMİZ\r\n\r\n• Daima yeninin peşindeyiz. \r\n• Bir olunca bin oluruz.\r\n• Var gücümüzle sizin için çalışırız\r\n• Sorumluluk alırız\r\n• Sadeliğin bereketine inanırız\r\n• İşimize tutku ile bağlıyız\r\n• Dünyaya taşar, Dünyayı taşırız.'),
(1, 4, 'gungoren@gmail.com', 11, 'Keleşoğlu Holding', 'Marmara Mah. Ulusum Cad. No: 4/1 Yakuplu Sahil / İSTANBUL', 'http://www.kelesogluholding.com', 'İnşaat ', '1979', '1979 yılında nitelikli projeler üretmek ve insanların hayatına değer katmak amacıyla kurulan Keleşoğlu Holding, geçmişten bu yana ulusal ve uluslararası 22 farklı mimar ile 33 nitelikli projeyi hayata geçirmiştir.\r\n\r\nÖzellikle metropollerin merkezi noktalarında konut, alışveriş merkezi, ticari ve karma projeler geliştiren Keleşoğlu Holding, kurulduğu günden bu yana toplamda 2 milyon 510 bin metrekare yaşam alanı ve ticari alan üretmiştir.', '\r\nProjelerini inşa ederken nicelik yerine niteliğe önem veren Keleşoğlu Holding, önemli lokasyonlarda yatırımlarına hızla devam ederek sektörün gelişmesine katkı sağlamaktadır.\r\n\r\nAlanında uzmanlarla çalışarak yatırımcısına kazanç sağlayan, her geçen gün büyüyen Keleşoğlu Holding, sürdürülebilir güven ortamları oluşturmaya devam ediyor. Dünyadaki gelişmeleri yakından izleyen ve yenilikçi bir perspektifle beklentilerin ötesinde yaşam alanları inşa eden Keleşoğlu Holding, çalışmalarını bu motivasyonla sürdürüyor.'),
(1, 5, 'halil9819@gmail.com', 81, 'Synlab', '', 'http://www.synlab.com.tr', 'Tıbbi Laboratuvarlar', '1998', 'SYNLAB doktorlar, klinikler ve ilaç endüstrisi uygulamaları için kapsamlı tıbbi laboratuvar hizmetleri sunmaktadır. Labco ve Synlab\'ın birleşimi ile kurulan yeni SYNLAB Grubu, insan tıbbı laboratuvar hizmetleri için Avrupa pazarında tartışmasız liderdir.\r\n\r\nSYNLAB, özellikle yenilikçi laboratuvar tıbbı yöntemlerin uygulanması ve uzman diyagnostik yeterliklerinin (SYNLAB Excellence Merkezleri) ağ üzerinde yoğunlaşmasına odaklanmaktadır. SYNLAB, veterinerlik tıbbı ve çevresel analiz için ayrı ülkelerdeki ek laboratuvarları (stratejik işletme birimleri) tutar. Bu hizmetler portföyü, bazı ülkelerdeki uzman medikal görüntüleme merkezleri tarafından tamamlanmaktadır. \r\n\r\nGrup, araştırma enstitüleri ve üniversiteler ile yakından çalışır ve aynı zamanda kendine ait bir eğitim kurumu olan SYNLAB Akademisi ile eğitim ihtiyaçlarını giderir.\r\n\r\n2007 yılında Ankalab ismiyle faaliyetlerine başlayan ve 2010 yılında SYNLAB bünyesine katılan şirketimiz, laboratuvar hizmetleri sunmaya devam etmektedir.', 'SYNLAB;\r\n\r\n - Klinik laboratuvar hizmetlerinde Avrupa\'da 1.,\r\n - 4  kıtada 35\'ten fazla  ülkede  faaliyet gösteren, \r\n -19.000\'den fazla  çalışanı olan,\r\n - Yılda yaklaşık 500 milyon test analiz eden, \r\n - Satış gelirleri yaklaşık 1,7 milyar avro olan uluslararası bir şirkettir.'),
(1, 6, 'şeftalixxx@gmail.com', 1234, 'Desos Dizayn A.Ş.', '', 'http://desos.com/tr_TR/', 'Yapı ', '1993', 'Desos Precast, 22 yılı aşkın süredir inşaat sektörüne prekast cephe giydirmeleri konusunda  hizmet vermektedir. Yurt içi ve yurt dışında otel, hastane, iş merkezi, konut, alışveriş  merkezi, okul gibi birçok önemli yapıya imzasını atmıştır. Desos, bünyesindeki mimar,  mühendis ve teknik kadrosunun yanı sıra deneyimli montaj ekibi ile sektöründe öncüdür.\r\n\r\nÜslendiği projeleri; projelendirme, tasarım, detay, uygulama, üretim, üretim planlama  ve yerinde uygulama aşamalarını takip ederek eksiksiz teslim eden Desos, üretim için  dünyanın önde gelen gelişmiş teknolojilerinden olan sprey sistem ve premix sistem\'i  kullanmaktadır. Bu sayede amaca uygun kalınlık ve boyutlarda ve fiziksel özelliklerde,  dış koşullara dayanıklı malzeme üretimi sağlanır. Dış hacimlerde GRC-GFRC ile bu sistemler  sayesinde geleneksel yöntemlerden farklı olarak, çok daha hafif ve dayanıklı uygun darbe  ve aşınma mukavemetlerine sahip obje ve elemanların üretilmesine imkan tanınır.  Kullanılan bu teknikler, uygun toleranslarda üretim yapmayı sağladığı için estetiğin çok  önemli olduğu uygulamalarda hassas ve düzgün bir montajı olanaklı kılar. ', ''),
(1, 7, 'xxxx987@gmail.com', 123, 'eryhag', 'etgwtg', 'wtge4', 'gewg', 'tgewtg', 'gewg', 'gwes'),
(1, 8, 'xxxx98fgew7@gmail.com', 786876578, 'ujsrt6uj6e', '55555du6u6', 'uj665', 'ujh6e5uj', '65euj6eh', 'e5ujh56', 'jh6e5ujh6e4'),
(1, 9, 'sumeryeni@gmail.com', 123, 'Iwallet Kurumsal Hizmetler A.Ş', 'Çamlıca Mah. Anadolu Bulvarı Timko İş Merkezi No:20U/7 YENİMAHALLE/ANKARA', 'http://www.iwallet.com.tr', 'Hizmet', '20418', 'iWallet, maaş dışı ödeneklerin, tek bir kart üzerinden yönetilmesini sağlayan, müşterlerilerinin ihtiyaçları doğrultusunda market, giyim, akaryakıt, kırtasiye, teknoloji, kitap ürünlerine ilişkin yardımları, esnek yan haklar platformunda buluşturan finansal teknoloji şirketidir.', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kaydedilenler`
--

CREATE TABLE `kaydedilenler` (
  `id` int(100) NOT NULL,
  `uyeid` int(100) NOT NULL,
  `ilanid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kaydedilenler`
--

INSERT INTO `kaydedilenler` (`id`, `uyeid`, `ilanid`) VALUES
(2, 49, 1),
(9, 53, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozgecmisler`
--

CREATE TABLE `ozgecmisler` (
  `id` int(10) UNSIGNED NOT NULL,
  `uyeid` int(10) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `adsoyad` varchar(100) NOT NULL,
  `epostadresi` varchar(50) NOT NULL,
  `telefon` varchar(12) NOT NULL,
  `adres` varchar(500) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL,
  `surucu` varchar(100) NOT NULL,
  `askerlikdurumu` varchar(100) NOT NULL,
  `ozetbilgi` varchar(1000) NOT NULL,
  `isdeneyimleri` varchar(1000) NOT NULL,
  `egitimbilgileri` varchar(1000) NOT NULL,
  `yetenekler` varchar(200) NOT NULL,
  `yabancidil` varchar(100) NOT NULL,
  `projeler` varchar(100) NOT NULL,
  `referanslar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ozgecmisler`
--

INSERT INTO `ozgecmisler` (`id`, `uyeid`, `baslik`, `adsoyad`, `epostadresi`, `telefon`, `adres`, `cinsiyet`, `surucu`, `askerlikdurumu`, `ozetbilgi`, `isdeneyimleri`, `egitimbilgileri`, `yetenekler`, `yabancidil`, `projeler`, `referanslar`) VALUES
(6, 49, 'ilközgeçmiş', 'halil can irez', 'halil9819@gmail.com', '5342316214', 'battalgazi mah 3408 sokak', 'on', 'Var', 'yok', 'wegvweasfgwe4tg', '34wega4eg34', 'g4wgv3wg', 'Java ', 'İngilizce', 'fg3w4f', 'fg3w4g4'),
(7, 51, 'ozg1', 'Gurbet Güngören', 'gungoren@gmail.com', '5342316214', 'battalgazi mah adıyaman', '', 'Var', 'yok', 'ryhbrej5', 't5heuj', 'srt6jusrujsr', 'Java Php', 'İngilizce', 'cccc', 'fg3w4g4'),
(8, 49, 'ozgeçmiş2', 'Halil Can ', 'halil9819@gmail.com', '5342316214', 'digjıoewrhgoö', 'on', 'Var', 'yok', 'yh53ujhe4tu', 'jh54uase', '5usr5u', 'Java Php', 'İngilizce', 'cccc', 'ccccc'),
(9, 49, 'ozgeçmiş3', 'halil can', 'şeftali@gmail.com', '5342316214', 'aet5hrgh', 'on', 'ger', 'yok', 'qtg4qewg', 'g4w', 'tw34atg', 'Java', '4twat', 't4wt', 't4taw'),
(13, 53, 'özgecmis2323', 'Mehmet Yiğit', 'mehmetxxsgd@gmail.com', '5368565252', 'İzzetpaşa Mahallesi. Hacı Kaya Sokak No:13 Daire 11 Elazığ Merkez / Elazığ', 'Erkek', 'Yok', 'Tecilli', 'Eğitim hayatım açtığınız pozisyonun gerektirdiği altyapıyı bana sağladı. Eğitim sürecim içerisinde araştırma, öz motivasyon, girişimcilik ve farklı yetenekler edinme noktasında kendimi geliştirdim. Özgeçmişimde de görebileceğiniz gibi farklı eğitimlerle ve yaptığım bireysel araştırmalarla kendimi iş hayatına hazırladım.\r\n\r\nİş yaşamında efektif ve hızlı olmak konusunda son derece özverili ve hevesli olduğumu, pozisyonun gerektirdiği sorumluluğu merak ve istekle üzerime almak istediğimi belirtmek isterim. İstekli, özenli ve dikkatli çalışmanın mutlaka başarı ile sonuçlanacağının bilincindeyim. Bu nedenle size yeteneklerim ve çalışma disiplinim ile katkı sağlayabileceğim noktasında şüphem yok.\r\n\r\nÖn yazımı okumaya ve CV’mi incelemeye vakit ayırdığınız için teşekkür ederim. Yakın zamanda sizden olumlu haberler almayı diliyorum.', 'SUN ÇİMENTO SANAYİİ A.Ş. Istanbul\r\nİnsan Kaynakları Müdürü\r\nPETROL SANAYİİ A.Ş, Diyarbakır\r\nİnsan Kaynakları Müdür Yardımcısı\r\n\r\n', 'İnsan Kaynakları Yönetimi Kursu, İsviçre, 1997\r\nMBA Uluslararası İş İdaresi Okulu, ABD (1979 )\r\nOrta Doğu Teknik Üniversitesi 8\r\nPetrol Mühendisliği, Lisans (1978)', 'Word, Excel, Access veri tabanı uygulamaları', 'İngilizce', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) UNSIGNED NOT NULL,
  `emailadresi` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `soyisim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `emailadresi`, `sifre`, `isim`, `soyisim`) VALUES
(47, 'xxxx987@gmail.com', '515b9d40500ef7d05007b5668991fc7c', 'halil can', 'irez'),
(49, 'halil9819@gmail.com', '202cb962ac59075b964b07152d234b70', 'halil can', 'irez'),
(50, 'mehmet@xx.com', '8cde47b7a5e0c36fe8af194d6088c7ef', 'mehmet ', 'yiğit'),
(51, 'gungoren@gmail.com', '202cb962ac59075b964b07152d234b70', 'Gurbet ', 'Güngören'),
(52, 'şeftali@gmail.com', '202cb962ac59075b964b07152d234b70', 'ahmet', 'xx'),
(53, 'mehmet@abcxx.com', '202cb962ac59075b964b07152d234b70', 'Mehmet ', 'Yiğit'),
(54, 'sumer@gmail.com', '202cb962ac59075b964b07152d234b70', 'halil', 'csn');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `basvurular`
--
ALTER TABLE `basvurular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `isilanları`
--
ALTER TABLE `isilanları`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `isverenkullanıcılar`
--
ALTER TABLE `isverenkullanıcılar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kaydedilenler`
--
ALTER TABLE `kaydedilenler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ozgecmisler`
--
ALTER TABLE `ozgecmisler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `basvurular`
--
ALTER TABLE `basvurular`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Tablo için AUTO_INCREMENT değeri `isilanları`
--
ALTER TABLE `isilanları`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `isverenkullanıcılar`
--
ALTER TABLE `isverenkullanıcılar`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kaydedilenler`
--
ALTER TABLE `kaydedilenler`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `ozgecmisler`
--
ALTER TABLE `ozgecmisler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
