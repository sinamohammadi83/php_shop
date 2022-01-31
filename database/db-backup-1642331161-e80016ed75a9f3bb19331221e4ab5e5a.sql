DROP TABLE IF EXISTS admin_setting;

CREATE TABLE `admin_setting` (
  `directory` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO admin_setting VALUES("admin");



DROP TABLE IF EXISTS brands;

CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO brands VALUES("8","samsung","public/uploads/brands/AYxIHjAcXoOUApRFsqyVpmRBjhhITmEGaGBLDYPuY.png","2021-12-30 09:34:35","2021-12-30 10:05:44"),
("9","lg","public/uploads/brands/hmtCntiJBQLKOqTPFfCGSwGQrDuqufzfitSsRhUze.png","2021-12-30 09:35:59","2021-12-30 10:10:02"),
("11","lenovo","public/uploads/brands/HLTAoVwJtsHRgIqHyjiGiefgRNIuWSjQphsCChHXr.png","2021-12-31 06:26:43","2022-01-01 02:26:34"),
("14","nvidia","public/uploads/brands/KfonHygvAiVnIJPgqfDTtLFiFhroTxMcveVGCrxBq.png","2022-01-03 06:22:16","2022-01-03 06:24:17"),
("15","huawei","public/uploads/brands/uFESibNYzTLQxUGjDeiozFThUkGSuoWdlZwGLhSrr.png","2022-01-04 12:30:28","2022-01-04 12:30:28"),
("16","ایزی دو","public/uploads/brands/izFetbsiijBmovpwtgimadQjiIQUIHodGGMvWfQNz.png","2022-01-04 02:09:56","2022-01-04 02:09:56"),
("17","گیگیابایت","public/uploads/brands/XkRwRuAfXECnrSMCJBmmsVdWWoOHwCQwayAvGymRG.png","2022-01-16 10:21:36","2022-01-16 10:21:36");



DROP TABLE IF EXISTS categories;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO categories VALUES("8","","کالای دیجیتال","2022-01-02 10:40:40","2022-01-15 10:38:44"),
("9","8","گوشی موبایل","2022-01-02 10:41:03","2022-01-15 04:59:53"),
("10","9"," سامسونگ","2022-01-02 10:41:21","2022-01-15 10:46:07"),
("12","8","لوازم جانبی گوشی","2022-01-03 12:42:58","2022-01-03 12:42:58"),
("13","9","هواوی","2022-01-03 01:22:35","2022-01-03 01:22:35"),
("14","","مد و پوشاک","2022-01-04 02:05:32","2022-01-04 02:05:32"),
("15","14","لباس مردانه","2022-01-04 02:06:03","2022-01-04 02:06:03"),
("16","15","پیراهن","2022-01-04 02:06:23","2022-01-04 02:06:23"),
("37","8","لب تاپ","2022-01-16 10:18:48","2022-01-16 10:18:48"),
("38","37","لپ تاپ و الترابوک","2022-01-16 10:19:38","2022-01-16 10:19:38");



DROP TABLE IF EXISTS category_property_group;

CREATE TABLE `category_property_group` (
  `property_group_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  KEY `category_id` (`category_id`),
  KEY `property_group` (`property_group_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO category_property_group VALUES("1","8"),
("3","8"),
("1","10"),
("3","10"),
("1","38"),
("3","38");



DROP TABLE IF EXISTS discounts;

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` bigint(11) NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discounts_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




DROP TABLE IF EXISTS permission_role;

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO permission_role VALUES("1","1"),
("1","2"),
("1","3"),
("1","4"),
("1","5"),
("1","6"),
("1","7"),
("1","8"),
("1","9"),
("1","10"),
("1","11"),
("1","12"),
("1","13"),
("1","14"),
("1","15"),
("1","16"),
("1","17"),
("1","18"),
("1","19"),
("1","20"),
("1","21"),
("1","22"),
("1","23"),
("1","24"),
("1","25"),
("1","26"),
("1","27"),
("1","28"),
("1","29"),
("1","30"),
("1","31"),
("1","32"),
("1","33"),
("1","34"),
("1","35"),
("1","36"),
("1","37"),
("2","2"),
("5","1"),
("5","2");



DROP TABLE IF EXISTS permissions;

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `label` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO permissions VALUES("1","admin-dashboard","داشبورد ادمین"),
("2","user-dashboard","داشبورد کاربر"),
("3","read-category","مشاهده دسته بندی"),
("4","create-category","ایجاد دسته بندی"),
("5","update-category","ویرایش دسته بندی"),
("6","delete-category","حذف دسته بندی"),
("7","read-brand","مشاهده برند"),
("8","create-brand","ایجاد برند"),
("9","update-brand","ویرایش برند"),
("10","delete-brand","حذف برند"),
("11","read-product","مشاهده محصول"),
("12","create-product","ایجاد محصول"),
("13","update-product","ویرایش محصول"),
("14","delete-product","حذف محصول"),
("15","read-user","مشاهده کاربر"),
("16","create-user","ایجاد کاربر"),
("17","update-user","ویرایش کاربر"),
("18","delete-user","حذف کاربر"),
("19","read-role","مشاهده نقش"),
("20","create-role","ایجاد نقش"),
("21","update-role","ویرایش نقش"),
("22","delete-role","حذف نقش"),
("23","update-settingadmin","ویرایش تنظیمات ادمین"),
("24","update-settinguser","ویرایش تنظیمات کاربر"),
("25","update-settingsite","ویرایش تنظیمات سایت"),
("26","read-slider","مشاهده اسلایدر"),
("27","create-slider","ایجاد اسلایدر"),
("28","update-slider","ویرایش اسلایدر"),
("29","delete-slider","حذف اسلایدر"),
("30","read-property_group","مشاهده گروه مشخصات"),
("31","create-property_group","ایجاد گروه مشخصات"),
("32","update-property_group","ویرایش گروه مشخصات"),
("33","delete-property_group","حذف گروه مشخصات"),
("34","read-property","مشاهد مشخصات"),
("35","create-property","ایجاد مشخصات"),
("36","update-property","ویرایش مشخصات"),
("37","delete-property","حذف مشخصات");



DROP TABLE IF EXISTS pictures;

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pictures_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO pictures VALUES("8","6","public/uploads/products/pictures/IdSfxlVxCoDrODktidemQEgYBwvrizlMyCSuiUmAa.jpeg"),
("9","6","public/uploads/products/pictures/IRsBLwIqRywOWlcsifiPTmNJOqsiRPNicrPJSYVuS.jpeg"),
("10","6","public/uploads/products/pictures/CquIkLXubpZSNOQWTajvLiZZHahbybRJmllhjsELM.jpeg");



DROP TABLE IF EXISTS product_property;

CREATE TABLE `product_property` (
  `product_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `property_id` (`property_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO product_property VALUES("1","6","2.50 تا 3.02","2022-01-15 11:53:46","2022-01-16 09:27:37"),
("1","1","8GB","2022-01-16 12:28:30","2022-01-16 09:27:37"),
("6","6","2.2GHz-5.0GHz","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","10","Intel Core i7","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","11","Intel","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","12","10th Gen Intel Core i7-10870H","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","13","16M Cache","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","1","32 گیگابایت","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","14","DDR4 Slots (2x16GB)","2022-01-16 10:48:00","2022-01-16 10:48:00"),
("6","15","3200 مگاهرتز","2022-01-16 10:48:00","2022-01-16 10:48:00");



DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` bigint(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `cost` bigint(20) NOT NULL,
  `image` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `is_published` enum('0','1') COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_brand_id_foreign` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO products VALUES("1","10","8","گوشی موبایل سامسونگ مدل Galaxy M22 SM-M225FV/DS دو سیم‌ کارت ظرفیت 64 گیگابایت و رم 4 گیگابایت","5424000","public/uploads/products/rtjiDgTXewfDJNctEbsfPiGuuUvfXtRTuXzAKubok.jpg","گوشی-موبایل-سامسونگ-مدل-Galaxy-M22-SM-M225FV/DS-دو-سیم‌-کارت-ظرفیت-64-گیگابایت-و-رم-4-گیگابایت","1","سری M و A گوشی‌های هوشمند میان‌رده سامسونگ توانسته‌اند تا به امروز با بهره بردن از مشخصات فنی مناسب، عملکرد بسیار خوب و قابل قبولی را به‌نمایش بگذارند و در بازار فروش هم جزو گوشی‌های پرفروش‌ شناخته می‌شوند. سامسونگ گلکسی M22 هم یکی از گوشی‌های هوشمند میان‌رده این شرکت است که به مشخصات فنی مناسب و قدرتمندی مجهز شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.4 اینچ از نوع سوپرامولد مجهز شده است. صفحه‌نمایشی که در هر اینچ توانایی نمایش 274 پیکسل را دارد و از‌جمله مشخصات این صفحه‌نمایش، توانایی ارائه نرخ بروزرسانی 90 هرتز است. حداکثر روشنایی 600 نیت (شمع در متر مربع) هم سبب شده تا در شرایط نوری متنوع، شاهد وضوح تصویر با‌کیفیت و خوبی از این صفحه‌نمایش باشیم. در قسمت پشتی هم یک سنسور دوربین اصلی با رزولوشن 48 مگاپیکسل از نوع عریض، سنسور 8 مگاپیکسل از نوع فوق عریض با زاویه دید 123 درجه و دو سنسور با رزولوشن 2 مگاپیکسل از نوع ماکرو و سنجش عمق، سنسور‌های دوربین چهار‌گانه سامسونگ گلکسی M22 را تشکیل می‌دهند. در بخش مشخصات سخت‌افزاری هم این گوشی میان‌رده به پردازنده هلیو G80 شرکت مدیاتک (Mediatek Helio G80) مجهز شده است که در اجرای بازی و فعالیت‌های روزمره، عملکرد خوب و قابل قبولی دارد. در بخش باتری هم همانند اکثر گوشی‌های هوشمند میان‌رده سری M سامسونگ، این گوشی هم به باتری قدرتمند با میزان ظرفیت 5000 میلی‌آمپر‌ساعت مجهز شده است. شارژر 25 واتی مجهز به فناوری شارژ سریع هم از دیگر مشخصات در نظر گرفته شده است.\n","","2022-01-04 12:50:38"),
("3","13","15","گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ظرفیت 128 گیگابایت","5890000","public/uploads/products/BDQjuAEGVjmEGIyFGxxhLKnAYGRyvfsuavOmAXdGc.jpg","گوشی-موبایل-هوآوی-مدل-Nova-7i-JNY-LX1-دو-سیم-کارت-ظرفیت-128-گیگابایت","1","شرکت هوآوی اخیراً گوشی‌ جدید خود را با نام «Nova 7i» معرفی کرد که می‌توان آن را یکی از زیباترین گوشی‌های 4 دوربین دانست. در این گوشی از یک صفحه‌نمایش 6.4 اینچی با فناوری IPS استفاده شده است که تقریباً 83.5 درصد از بدنه را تشکیل داده است. این نمایشگر از رزولوشن بالایی برخوردار است؛ به‌طوری‌که حدود 398 پیکسل را در هر اینچ جا داده است. این گوشی از یک دوربین اصلی چهارگانه بهره می‌برد که شامل یک لنز عریض 48 مگاپیکسلی، یک لنز فوق عریض 8 مگاپیکسلی ، یک لنز تله فوتو 2 مگاپیکسلی و یک سنسورعمق 2 مگاپیکسلی است. هوآوی برای دوربین سلفی این مدل هم از یک سنسور 16 مگاپیکسلی استفاده کرده است. در بخش سخت افزار هم Nova 7i به چیپست Kirin 810 مجهز شده است و یک پردازنده قدرتمند 8 هسته‌ای و 8 گیگابایت رم آن را همراهی می‌کنند. سنسور اثر انگشت در گوشی Nova 7i بر روی لبه کناری قرار گرفته است تا دسترسی به آن آسان‌تر باشد. منبع تغذیه این گوشی هم یک باتری لیتیوم-پلیمر با ظرفیت 4200 میلی‌آمپر ساعت است که شارژ سریع باتری با توان 40 وات پشتیبانی می‌کند.\n","2022-01-04 01:18:28","2022-01-05 07:08:56"),
("4","16","16","پیراهن مردانه ایزی دو مدل 218113270","662000","public/uploads/products/dTwftNslWiBOfGwCaXOxnVWNyapWmOPzVmSlgPqVu.jpg","پیراهن-مردانه-ایزی-دو-مدل-218113270","1",".....","2022-01-04 02:10:28","2022-01-04 02:59:35"),
("5","10","8","گوشی موبایل سامسونگ مدل A52s 5G SM-A528B-DS دو سیم‌کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت","10449000","public/uploads/products/xefldPisSinGMJwwbEWOTgbfPridEoERbgqACwxtF.jpg","گوشی-موبایل-سامسونگ-مدل-A52s-5G-SM-A528B-DS-دو-سیم‌کارت-ظرفیت-256-گیگابایت-و-رم-8-گیگابایت","1","این نسخه از گوشی موبایل Galaxy A52s با رم 8 گیگابایتی و حافظه داخلی 256 گیگابایت به عنوان یکی از جدیدترین میان‌رده‌های سامسونگ با تکنولوژی 5G روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند. این گوشی قاب پشتی از جنس پلاستیک دارد و قاب جلویی آن را شیشه پوشانده که البته جلوه‌ی زیبایی به گوشی داده است. این محصول سامسونگ با نسخه 11 از سیستم‌عامل اندروید روانه بازار شده است تا از هر نظر گوشی مدرن به‌حساب بیاید. صفحه‌نمایش استفاده‌شده در این گوشی 6.5 اینچ با رزولوشن FullHD+ است که با استفاده از فناوری Super AMOLED و پنل OLED تصاویر شفاف و بی‌نظیری را به نمایش می‌گذارد. این صفحه‌نمایش در هر اینچ 407 پیکسل را نشان می‌دهد که این یعنی جزئیات و وضوح تصویر عالی است. همچنین روکش این نمایشگر لایه‌ی محافظ Corning Gorilla Glass است که از خط‌وخش و ضربه جلوگیری می‌کند. تراشه‌ی این محصول، Snapdragon 778G 5G از تراشه‌های 6 نانومتری سامسونگ است که به همراه 8 گیگابایت رم عرضه می‌شود. تراشه‌ی گرافیکی Adreno 642L هم برای پخش ویدئو و بازی مناسب است. این نسخه از گوشی با حافظه 256 گیگابایتی عرضه شده است. دوربین اصلی A52s سنسور 64 مگاپیکسلی دارد و از نوع عریض (Wide) است. یک سنسور 12مگاپیکسلی و دو سنسور 5 دیگر هم در کنار این دوربین اصلی مجموعه دوربین‌های قاب پشتی A52s را تشکیل داده‌اند. دوربین سلفی 32مگاپیکسلی هم در قاب جلویی این گوشی به کار گرفته شده است. باتری 4500 میلی‌آمپرساعتی، پشتیبانی از فناوری شارژ سریع 25 واتی، درگاه USB Type-C و حسگر اثرانگشت در زیر قاب اصلی هم از دیگر ویژگی‌های این تازه‌وارد است. سامسونگ در ساخت این گوشی از جدیدترین فناوری‌های ساخت گوشی استفاده کرده است تا میان‌رده‌ای با قابلیت‌های نزدیک به یک بالارده خوش‌ساخت را روانه بازار کند.","2022-01-16 09:48:10","2022-01-16 09:48:10"),
("6","38","17","لپ‌تاپ گیمینگ 15 اینچی آئورس مدل AORUS 15G YC","72000000","public/uploads/products/TwAaYDhtPKdxvhykbgzkbllYkUvvKwCiNtxQxpFxW.jpeg","لپ‌تاپ-گیمینگ-15-اینچی-آئورس-مدل-AORUS-15G-YC","1","گیگابایت (GIGABYTE)، در ابتدا سال ۲۰۲۱ اقدام به معرفی دو سری از لپتاپ‌های خود تحت ساب برند آئورس (AORUS) و ایرو (AERO) با شعار «بازدهی در راس هر چیز دیگری» کرد. دو سری مذکور به ترتیب برای قشر گیمر و طراحان حرفه‌ای ساخته شده‌اند و هر یک از مزایای ویژه‌ای برخوردار هستند. لپتاپ گیمینگ ۱۵ اینچی آئورس مدل AORUS 15G YC، نیز یکی از این مدل لپتاپ‌ها‌ است که کاربری آن تماما مخصوص بازی‌ست.۱۵G KC از یک صفحه‌نمایش ۱۵.۶ اینچی مجهز به فناوری Thin Bezel (فناوری که وظیفه‌ی ارائه صفحه نمایشی با حاشیه کم را دارد) با وضوح تصویر FHD 1920x1080 بهره می‌برد. این صفحه‌نمایش مبتنی بر یک پنل IPS است و نرخ تازه‌سازی آن به عدد خارق‌العاده ۲۴۰ هرتز می‌رسد. گیگابایت در درون این مدل از یک پردازنده مرکزی نسل دهمی اینتل مدل CORE i7-10870H استفاده کرده است و وظیفه پردازش گرافیکی را به یک پردازنده گرافیکی یکپارچه INTEL UHD GRAPHICS 630 و یک پردازنده گرافیکی مجزا GEFORCE RTX 3080Q انویدیا با ۸ گیگابایت حافظه GDDR6 سپرده است. آئورس 15G YC از دو اسلات حافظه M.2 SSD با ظرفیت یک ترابایت در کنار 32GB رم (دو ماژول 16GB) با فرکانس ۳۲۰۰ مگاهرتز برخوردار است. گیگابایت در این مدل دو بلندگو ۲ وات، وب کم HD، باتری لیتیوم پلیمری ۹۹wh، بلوتوث V5.0 + LE و مودم Wi-Fi 6 نیز قرار داده است. تمامی این موارد، موجب خلق محصولی با وزن باورنکردنی تنها ۲ کیلوگرم شده است که آئورس 15G YC را در دسته‌ی لپتاپ‌های مخصوص بازی سبک وزن قرار می‌دهد.\n\n","2022-01-16 10:23:00","2022-01-16 10:23:00");



DROP TABLE IF EXISTS properties;

CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_group_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `property_group_id` (`property_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO properties VALUES("1","3","ظرفیت حافظه RAM","2022-01-15 07:56:09","2022-01-16 10:33:38"),
("6","1","فرکانس پردازنده","2022-01-15 11:52:50","2022-01-16 10:32:28"),
("7","4","ابعاد","2022-01-16 10:24:07","2022-01-16 10:24:07"),
("8","4","وزن","2022-01-16 10:24:22","2022-01-16 10:24:22"),
("9","4","نوع","2022-01-16 10:24:30","2022-01-16 10:24:30"),
("10","1","سری پردازنده","2022-01-16 10:32:11","2022-01-16 10:32:11"),
("11","1","پردازنده","2022-01-16 10:32:44","2022-01-16 10:32:44"),
("12","1","مدل پردازنده","2022-01-16 10:32:57","2022-01-16 10:32:57"),
("13","1","حافظه‌ی Cache","2022-01-16 10:33:11","2022-01-16 10:33:11"),
("14","3","نوع حافظه RAM","2022-01-16 10:33:53","2022-01-16 10:33:53"),
("15","3","توضیحات حافظه RAM","2022-01-16 10:34:04","2022-01-16 10:34:04");



DROP TABLE IF EXISTS property_groups;

CREATE TABLE `property_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO property_groups VALUES("1","پردازنده‌ی مرکزی","2022-01-15 01:48:50","2022-01-16 10:31:27"),
("3","حافظه RAM","2022-01-15 02:17:18","2022-01-16 10:31:52"),
("4","مشخصات کلی","2022-01-16 10:23:54","2022-01-16 10:23:54");



DROP TABLE IF EXISTS roles;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO roles VALUES("1","admin","","2022-01-15 08:08:02"),
("2","normal-user","","2022-01-13 09:39:43"),
("5","editor","2022-01-10 06:56:11","2022-01-15 09:40:52");



DROP TABLE IF EXISTS sliders;

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(50) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `url` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO sliders VALUES("3","گوشی سامسونگ","public/uploads/sliders/OJTebiKMGyWgiTBGTZTUIIRiilFOyMjSZAseIYTzV.jpg","http://localhost/php_shop/index.php?c=product&a=show&product=%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D9%87%D9%88%D8%A2%D9%88%DB%8C-%D9%85%D8%AF%D9%84-Nova-7i-JNY-LX1-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"),
("5","موبایل هوآوی","public/uploads/sliders/AZTlsLJMjYSCTgvEppyuNEkLzUljftijaKXeyNdiS.jpg","http://localhost/php_shop/index.php?c=product&a=show&product=%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF-%D9%85%D8%AF%D9%84-Galaxy-M22-SM-M225FV/DS-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85%E2%80%8C-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-64-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA-%D9%88-%D8%B1%D9%85-4-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA");



DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email_verifyed_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

INSERT INTO users VALUES("23","1","sina","sinamohammadi83a@gmail.com","25d55ad283aa400af464c76d713c07ad","public/uploads/users/UOsvDrzrnESbrwixlGCnldCxUZJWkXSDsIVzfQaUv.jpg","2022-01-01 06:39:27"),
("25","5","","saman.mohammadi.1509@gmail.com","b81c23b4564e4212e3832fd0a91c6a30","","2022-01-01 07:07:36");



DROP TABLE IF EXISTS verify_register;

CREATE TABLE `verify_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;




