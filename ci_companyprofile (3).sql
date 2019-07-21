-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jul 2019 pada 16.29
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_companyprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`) VALUES
(1, 'Visi', '<p>Menjadi Laboratorium Patologi Anatomi Yang Unggul Daalam kualitas diagnosis dan pelayanan</p>\r\n'),
(2, 'Misi', '<p>Menyelenggarakan layanan laboratorium Patologi Anatomi yang berkualitas, terjangkau dengan dukungan teknologi dan&nbsp;Sumber daya Manusia</p>\r\n'),
(3, 'Moto', 'Berkualitas,Akurat,Terjangkau'),
(9, 'Sejarah', '<p>Selamat Datang di lab Waskhita</p>\r\n\r\n<p>Laboratorium Patologi Anatomik &ldquo; Waskitha &ldquo;&nbsp; didirikan di Yogyakarta pada tanggal 25 Juni 1980 atas prakarsa Sembilan dokter Patologi Anatomi pada saat itu lebih dikenal dengan nama &ldquo; Laboratorium Diagnostik Waskitha&rdquo;. Seiring berjalan nya waktu pada tahun 2016 tepatnya bulan Oktober 2016 laboratorium patologi anatomik Waskitha berkembang menjadi PT. Waskitha Diagnostika Utama.</p>\r\n\r\n<p>Selama 39 tahun Laboratorium Patologi Anatomik &ldquo; Waskitha &ldquo; menjadi salah satu laboratorium Khusus untuk pemeriksaan penunjang Diagnosa Kanker/tumor. Harapan dari kami bisa memberikan hasil yang berkualitas sehingga dapat digunakan untuk penegakan diagnosis dan pengobatan pasien.</p>\r\n\r\n<p>Menjadi laboratorium Patologi Anatomik yang terbaik di Indonesia adalah komitmen kami sehinga kami akan senantiasa menjaga kualitas layanan dan bisa memberikan pelayanan yang profesional didukung dengan peralatan dan Sumber Daya Manusia yang handal serta bisa menjadi salah satu pusat rujukan pemeriksaan penunjang Patologi Anatomik di Indonesia didukung dengan keikutsertaan kami dalam Program Pemantapan Mutu External maupun Internal yang rutin kami lakukan, kami berupaya untuk bisa memberikan yang terbaik untuk pelanggan.</p>\r\n'),
(11, 'Pemeriksaan', '<p><strong>Fasilitas Pemeriksaan :</strong></p>\r\n\r\n<ol>\r\n	<li>Melayani pemeriksaan Patologi Anatomik (Jaringan)</li>\r\n	<li>Pemeriksaan Sitologi Ginekologi (Papsmear)</li>\r\n	<li>Pemeriksaan Sitologi Non Ginekologi ( Cairan : Pleura,Ascites,Sendi,Urine)</li>\r\n	<li>Pemeriksaan Aspirasi Jarum Halus</li>\r\n	<li>Pemeriksaan Imunohistokimia : ER (Estrogen Receptor),PR (Progesteron Receptor), HER2, Ki 67, CD 30</li>\r\n</ol>\r\n'),
(12, 'Pelayanan', '<p><strong>Fasilitas Layanan :</strong></p>\r\n\r\n<ol>\r\n	<li>Pick Up Sampel &amp; Kirim Hasil Langsung ke RS</li>\r\n	<li>Free Konsultasi langsung dengan dokter Patologi Anatomi</li>\r\n	<li>Hotline Service Marketing 24 Jam</li>\r\n</ol>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `nama`, `nama_file`) VALUES
(11, '6', '6.png'),
(12, '4545', '4545.png'),
(13, '6', '61.png'),
(14, 'ajksdh', 'ajksdh.png'),
(15, 'ssd', 'ssd.png'),
(16, 'jkf', 'jkf.png'),
(17, 'hkhkj', 'hkhkj.png'),
(18, 'jjj', 'jjj.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(52, 'Apa_itu_kanker3.jpg', 'Apa itu kanker?', '<p>Apa itu penyakit kanker?</p>\r\n\r\n<p>Penyakit ini terjadi karena pertumbuhan sel-sel abnormal yang tidak terkendali, yang menyebabkan jaringan tubuh normal rusak. Pada dasarnya, tubuh manusia terdiri dari triliunan sel yang tersebar di setiap organ dan bagian. Sel-sel ini nantinya akan terus tumbuh dan berkembang menjadi sel baru. Sementara sel-sel yang sudah tua, tidak sehat, dan tidak berfungsi lagi akan mati secara alamiah.</p>\r\n\r\n<p>Sementara sel kanker tidak akan mati dengan sendirinya. Sel ini akan terus mengganda dan memperbanyak diri hingga jumlah yang sudah tak bisa dikendalikan lagi. Perubahan inilah yang bisa memicu munculnya sel kanker.</p>\r\n\r\n<p>Dibandingkan dengan sel tubuh, sel kanker memiliki banyak sekali perbedaan. Sel ini dapat tumbuh secara agresif dan menyebar ke bagian tubuh lainnya guna membentuk sebuah jaringan baru. Sel kanker juga tidak bisa mati dan rusak dengan sendirinya.</p>\r\n\r\n<p>Penyakit kanker bisa muncul pada bagian tubuh mana pun karena asalnya dari sel dalam tubuh manusia. Maka, ada banyak sekali jenis penyakit kanker yang ditemui pada manusia. Dilaporkan bahwa terdapat lebih dari 200 jenis penyakit kanker yang berbeda.</p>\r\n\r\n<p><strong>Seberapa umumkah penyakit kanker?</strong></p>\r\n\r\n<p>Penyakit ini bisa menyerang siapa pun tanpa pandang bulu. Mulai dari balita hingga lanjut usia, wanita maupun laki-laki, bahkan mereka yang gaya hidupnya cukup sehat. Hal ini dapat dikendalikan dengan mengurangi faktor risiko Anda. Silakan diskusikan dengan dokter Anda untuk informasi lebih lanjut.</p>\r\n\r\n<p><strong>Tanda-tanda &amp; gejala</strong></p>\r\n\r\n<p>Apa saja tanda-tanda dan gejala kanker?</p>\r\n\r\n<p>Berikut adalah beberapa gejala kanker yang tidak boleh diabaikan:</p>\r\n\r\n<p>1. Muncul benjolan yang tidak lazim</p>\r\n\r\n<p>Gejala kanker yang paling khas adalah munculnya benjolan tumor yang tidak lazim. Jika Anda menemukan benjolan yang tumbuh dengan cepat dalam waktu singkat dan berbentuk tidak wajar, bisa jadi ini merupakan gejala kanker payudara.</p>\r\n\r\n<p>Selain di payudara, benjolan ini juga dapat muncul di bagian tubuh mana pun. Maka dari itu, jika Anda menemukan benjolan baru atau benjolan yang mengalami perubahan di tubuh Anda, periksakan ke dokter sesegera mungkin.</p>\r\n\r\n<p>2. Perubahan pada kulit</p>\r\n\r\n<p>Jika Anda mencurigai adanya perubahan ukuran, bentuk, atau warna tahi lalat yang tak wajar, waspadai gejala kanker kulit. Untuk memastikan segala perubahan yang terjadi pada kulit Anda bukan gejala penyakit ini, segera konsultasikan ke dokter untuk pemeriksaan menyeluruh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anda juga sebaiknya melakukan pemeriksaan kulit secara rutin sendiri untuk mengetahui ada tidaknya pertumbuhan yang tampak aneh pada kulit.</p>\r\n\r\n<p>3. Masalah pada kelenjar getah bening</p>\r\n\r\n<p>Kelenjar getah bening adalah struktur jaringan kecil berbentuk menyerupai kacang merah yang memegang peranan besar dalam sistem kekebalan tubuh manusia. Jadi, ketika terjadi infeksi, kelenjar getah bening akan&nbsp; membengkak untuk memberikan tanda.</p>\r\n\r\n<p>Oleh karena itu, pembengkakan kelenjar getah bening perlu diwaspadai karena bisa menjadi tanda kanker, seperti leukimia dan limfoma. Kelenjar ini banyak terdapat pada leher, paha bagian dalam, ketiak, di sekitar usus, dan di antara paru-paru.</p>\r\n\r\n<p>4. Berat badan turun tanpa sebab</p>\r\n\r\n<p>Hal yang normal jika Anda mengalami penurunan berat badan karena sedang diet. Namun apabila penurunan berat badan Anda terjadi tanpa sebab yang jelas, Anda perlu waspada.</p>\r\n\r\n<p>Penurunan berat badan bisa saja menjadi gejala kanker usus besar, pankreas, atau pencernaan lainnya. Tidak hanya itu, penurunan berat badan tiba-tiba juga bisa menjadi tanda penyakit ini yang dapat menyebar ke hati sehingga akan mempengaruhi nafsu makan dan kemampuan tubuh Anda untuk melepaskan limbah makanan dalam tubuh.</p>\r\n\r\n<p>5. Batuk atau sesak yang berkepanjangan</p>\r\n\r\n<p>Kebanyakan batuk mungkin tidak perlu diwaspadai. Akan tetapi jika batuk yang Anda alami tak sembuh-sembuh, terjadi dalam waktu yang lama dan disertai dengan sesak napas ataupun darah, Anda harus waspada. Pasalnya, ini bisa berbahaya karena menunjukkan bahwa paru-paru Anda bermasalah. Dalam skenario terburuk, yang Anda alami bisa jadi kanker paru.</p>\r\n\r\n<p>Maka dari itu, bila Anda terkena batuk yang berkepanjangan, pergilah ke pusat kesehatan untuk melakukan X-ray atau CT scan dada.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6. Rasa sakit tanpa sebab</p>\r\n\r\n<p>Jika rasa sakit Anda akibat dari cedera fisik, ini mungkin bukan masalah serius. Namun, apabila Anda mengalami rasa sakit yang tetap dan tanpa sebab ini patut diwaspadai.</p>\r\n\r\n<p>Tergantung pada lokasi rasa sakitnya, ada berbagai macam jenis penyakit ini. Sakit kepala yang tak kunjung sembuh meski sudah menjalani pengobatan bisa menjadi gejala kanker otak.</p>\r\n\r\n<p>7. Perdarahan tidak normal</p>\r\n\r\n<p>Perdarahan tidak normal bisa mengindikasikan kemungkinan bahwa Anda memiliki penyakit ini. Misalnya, perdarahan vagina di luar menstruasi ataupun setelah berhubungan seksual bisa menjadi tanda kanker endometrium dan serviks.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mungkin ada gejala kanker yang tidak disebutkan di atas. Oleh sebab itu, segera konsultasikan ke dokter jika Anda mencurigai perubahan yang tidak wajar pada tubuh Anda sebagai deteksi dini penyakit ini. Semakin dini penyakit ini terdeteksi, peluang untuk sembuhnya juga akan semakin besar.</p>\r\n\r\n<p><strong>Kapan saya harus periksa ke dokter?</strong></p>\r\n\r\n<p>Jika Anda mengalami satupun tanda atau gejala kanker yang disebutkan di atas, atau memiliki pertanyaan apapun tentang gejala penyakit ini, sebaiknya segela konsultasikanlah pada dokter Anda. Tubuh setiap orang bereaksi dengan cara berbeda. Selalu lebih baik untuk mendiskusikan apa yang terbaik untuk keadaan Anda dengan dokter.</p>\r\n\r\n<p><strong>Penyebab</strong></p>\r\n\r\n<p><strong>Apa penyebab kanker?</strong></p>\r\n\r\n<p>Penyebab kanker paling umum adalah perubahan (mutasi) pada gen dalam sel. Di dalam gen, terkandung ribuan DNA yang akan memberi instruksi pada sel untuk menjalankan fungsinya pada organ tubuh tempat sel tersebut hidup.</p>\r\n\r\n<p>Maka inti sel yang menjadi rumah bagi ribuan gen ini akan menentukan jenis sel apa yang dibutuhkan organ tubuh tertentu, kapan sel perlu membelah diri, dan sel mana yang harus mati dan digantikan.</p>\r\n\r\n<p>Sayangnya, proses ini tidak selalu berjalan dengan sempurna. Ketika sel melakukan pembelahan diri, ada risiko sel baru yang lahir dari pembelahan tersebut mengandung gen yang rusak atau digandakan terlalu banyak. Perubahan struktur gen dalam sel ini disebut sebagai mutasi gen.</p>\r\n\r\n<p>Ketika mutasi gen terjadi, sel sudah tidak bisa lagi menerima perintah dan instruksi dari sistem pusat sehingga sel ini akan tumbuh di luar kendali dan menghasilkan protein yang tidak normal. Kelainan pada protein yang diproduksi akan semakin memicu pembelahan sel-sel baru dengan gen yang tidak sempurna. Pada kasus lain, protein yang dibutuhkan untuk menghentikan kelahiran sel baru justru tidak diproduksi sama sekali.</p>\r\n\r\n<p>Biasanya, mutasi gen baru akan berpotensi menimbulkan kanker jika terjadi lebih dari lima kali dan melibatkan gen yang berbeda. Proses ini bisa berlangsung hingga bertahun-tahun sampai sel-sel tersebut membelah diri dan membentuk sel kanker yang cukup besar. Barulah gejala-gejalanya mulai muncul dan sel-sel kanker tampak ketika tubuh Anda diperiksa.</p>\r\n\r\n<p>Namun, pada kasus anak-anak, kerusakan gen sudah terjadi sejak dalam kandungan atau sejak lahir. Jadi, mereka memang memiliki gen bawaan yang rusak dalam sel tubuh sehingga proses terbentuknya penyakit kanker tidak membutuhkan waktu yang lama.</p>\r\n\r\n<p><strong>Secara umum, ada dua faktor penyebab kanker yang paling sering terjadi, yaitu:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Faktor internal. Anda mungkin terlahir dengan mutasi genetik yang diwariskan dari orangtua Anda. Jenis mutasi ini bertanggung jawab atas persentase kecil dari penyakit ini.</li>\r\n	<li>Faktor eksternal. Kebanyakan mutasi gen terjadi setelah kelahiran dan tidak diwariskan. Sejumlah faktor dapat menyebabkan mutasi gen seperti merokok, radiasi, virus, bahan kimia penyebab kanker (karsinogen), obesitas, hormon, peradangan kronis dan kurangnya berolahraga.</li>\r\n</ol>\r\n\r\n<p>Para ilmuwan tidak mengetahui seberapa banyak mutasi yang harus terakumulasi sehingga bisa jadi penyebab kanker. Meski begitu, para ilmuwan percaya bahwa penyebab kanker akan bervariasi pada setiap orang tergantung jenis kanker yang dialaminya. Konsultasikan ke dokter Anda untuk mengetahui penyebab kanker yang lebih lengkap. Dengan mengetahui berbagai faktor penyebab kanker memungkinkan untuk menurunkan risiko Anda terkena penyakit ini di masa yang akan datang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Faktor-faktor risiko</strong></p>\r\n\r\n<p><strong>Apa yang meningkatkan risiko saya terkena penyakit kanker?</strong></p>\r\n\r\n<p><strong>Ada banyak faktor yang meningkatkan risiko Anda terkena penyakit ini, seperti:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Usia. Penyakit ini bisa memerlukan waktu puluhan tahun untuk tumbuh. Oleh karena itu, kebanyakan orang yang didiagnosis penyakit ini berusia 65 tahun atau lebih. Meski begitu, penyakit ini bukanlah penyakit eksklusif untuk orang dewasa. Pasalnya, penyakit ini juga dapat didiagnosis pada usia berapa pun.</li>\r\n	<li>Kebiasaan buruk. Merokok, konsumsi alkohol berlebihan, paparan sinar matahari berlebihan, obesitas, dan seks yang tidak aman bisa jadi faktor penyebab kanker.</li>\r\n	<li>Riwayat keluarga. Dalam banyak kasus, penyakit ini sifatnya menurun. Maka, Anda harus menjalani tes genetik untuk pencegahan lebih lanjut. Meski begitu, dengan memiliki mutasi genetik yang diturunkan bukan berarti Anda akan terkena penyakit ini.</li>\r\n	<li>Kondisi kesehatan. Beberapa kondisi kesehatan kronis seperti ulcerative colitis dapat dengan nyata meningkatkan risiko tumbuhnya penyakit ini jenis tertentu.</li>\r\n	<li>Lingkungan hidup. Bahan kimia berbahaya seperti asbes dan benzena di rumah atau tempat kerja bisa menjadi faktor yang meningkatkan risiko penyakit ini. Meskipun Anda tidak merokok, Anda bisa menghirup asap rokok jika berada di sekitar orang yang merokok atau tinggal dengan seseorang yang merokok.</li>\r\n</ol>\r\n\r\n<p><strong>Obat &amp; Pengobatan</strong></p>\r\n\r\n<p><strong>Informasi yang diberikan bukanlah pengganti nasihat medis. SELALU konsultasikan pada dokter Anda.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bagaimana penyakit kanker didiagnosis?</strong></p>\r\n\r\n<p>Sangatlah dianjurkan untuk secepatnya mendiagnosis penyakit untuk mendapatkan peluang terbaik untuk penyembuhan, terutama pada stadium awal. Dokter bisa menggunakan satu atau lebih pendekatan untuk mendiagnosis penyakit ini. Beberapa tes yang umum dilakukan dokter untuk mendiagnosis penyakit ini di antaranya:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Pemeriksaan fisik. Dokter mungkin akan melakukan colok dubur jika mencurigai Anda mengalami penyakit ini di usus atau prostat. Metode pemeriksaan fisik lainnya juga mungkin dilakukan dokter untuk memperjelas diagnosis penyakit pasien.</li>\r\n	<li>Tes laboratorium. Dokter mungkin akan melakukan tes darah untuk untuk menggambarkan kesehatan pasien secara keseluruhan dan mendeteksi ada tidaknya kelainan.</li>\r\n	<li>Tes pencitraan. Beragam tes pencitraan seperti PET scan, MRI, rontgen, ultrasound, dan CT scan dapat digunakan untuk mencari tahu apakah penyakit ini telah menyebar.</li>\r\n	<li>Biopsi. Prosedur ini dilakukan dengan cara mengangkat sebagian kecil jaringan untuk diperiksa dengan mikroskop. Sampel yang diambil dalam biopsi kemudian dianalisis oleh ahli patologi. Ia akan mengevaluasi sel, jaringan, dan organ dalam tes laboratorium untuk menentukan diagnosis penyakit yang dialami pasien.</li>\r\n</ol>\r\n\r\n<p><strong>Apa saja obat kanker?</strong></p>\r\n\r\n<p>Obat kanker pada dasarnya tergantung dari jenis dan stadium dari penyakit ini, potensi efek samping, serta pilihan dan kesehatan umum dari pasien. Secara umum, berikut ini beberapa obat kanker yang paling umum:</p>\r\n\r\n<p>1. Kemoterapi</p>\r\n\r\n<p>Kemoterapi adalah perawatan yang menggunakan zat kimia dengan intensitas kuat untuk membunuh sel yang bertumbuh cepat pada tubuh. Kemoterapi paling sering digunakan sebagai obat kanker, karena sel penyakit ini berkembang lebih cepat dari sel normal dalam tubuh.</p>\r\n\r\n<p>Obat-obatan kemoterapi dapat digunakan sendiri atau dikombinasikan sebagai obat kanker. Kemoterapi adalah cara yang efektif untuk mengobati banyak jenis penyakit ini namun memiliki risiko efek samping yang juga harus diwaspadai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Radioterapi</p>\r\n\r\n<p>Radioterapi adalah cara pengobatan yang mengandalkan radiasi dengan menggunakan gelombang energi tinggi seperti, sinar x, gama, proton, dan elektron untuk membunuh sel kanker. Walaupun radioterapi paling sering digunakan sebagai obat kanker, tetapi terkadang terapi ini juga dipakai untuk mengobati pasien yang tidak terkena penyakit ini, seperti tumor dan gangguan pada kelenjar tiroid.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Terapi target</p>\r\n\r\n<p>Terapi target adalah terapi yang menggunakan obat-obatan atau bahan kimia lain untuk mengidentifikasi dan menyerang sel kanker secara spesifik tanpa membunuh sel-sel normal. Terapi ini antara lain:</p>\r\n\r\n<ul>\r\n	<li>Antibodi monoclonal</li>\r\n	<li>Penghambat tirosin kinase</li>\r\n	<li>Cyclin-dependent kinase inhibitors (penghambat cyclin-dependent kinase)</li>\r\n</ul>\r\n\r\n<p>Terapi yang digunakan dapat berupa kombinasi dari beberapa terapi. Konsultasikan dengan dokter Anda untuk pilihan terapi dan obat kanker yang tepat untuk Anda. Setiap pengobatan penyakit ini memiliki efek samping yang berbeda-beda. Pertimbangkan risiko pengonsumsian obat kanker dengan kondisi Anda.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Apa saja perubahan gaya hidup atau pengobatan rumahan yang dapat dilakukan untuk mengatasi penyakit kanker?</strong></p>\r\n\r\n<ol>\r\n	<li>Perubahan gaya hidup berikut dapat membantu Anda mencegah dan mengatasi penyakit kanker:</li>\r\n	<li>Jangan merokok. Merokok telah dikaitkan dengan berbagai jenis penyakit ini&mdash;termasuk paru-paru, mulut, tenggorokan, laring, pankreas, kandung kemih, rahim dan ginjal.</li>\r\n	<li>Makanlah dengan pola makan yang sehat.</li>\r\n	<li>Makanlah banyak buah-buahan dan sayuran.</li>\r\n	<li>Batasilah daging olahan.</li>\r\n	<li>Pertahankanlah berat badan yang sehat dan aktif secara fisik. Mempertahankan berat badan yang sehat dapat menurunkan risiko berbagai jenis penyakit ini, termasuk payudara, prostat, paru-paru, usus besar, dan ginjal.</li>\r\n	<li>Lindungilah diri dari sinar matahari.</li>\r\n	<li>Dapatkan perawatan medis yang teratur.</li>\r\n</ol>\r\n\r\n<p>(Sumber dari https://hellosehat.com)</p>\r\n'),
(53, 'Pemeriksaan_Papsmear_.jpg', 'Pemeriksaan Papsmear ', '<p>Kanker serviks atau leher rahim merupakan salah satu jenis kanker yang paling sering menyerang wanita. Salah satu hal yang harus wanita lakukan untuk mencegah kanker serviks sedini mungkin adalah dengan melakukan pemeriksaan pap smear. Jika ditemukan tanda-tanda kanker serviks bisa berkembang di tubuh Anda melalui pemeriksaan ini, maka Anda bisa mencegahnya sedini mungkin.</p>\r\n\r\n<p>Namun, sebelum melakukan pemeriksaan pap smear untuk pertama kali, sebaiknya persiapkan diri Anda.</p>\r\n\r\n<p><strong>Apa yang akan terjadi selama pemeriksaan pap smear?</strong></p>\r\n\r\n<p>Sebelum melakukan pemeriksaan pap smear pertama kali, sebaiknya Anda sudah mengetahui apa saja yang akan Anda lakukan saat pemeriksaan, sehingga Anda tidak kaget. Pap smear ini dilakukan untuk melihat perubahan sel-sel dalam serviks Anda. Jadi, dalam prosesnya, sampel sel dalam serviks Anda akan diambil untuk diteliti lebih lanjut di laboratorium.</p>\r\n\r\n<p>Pada saat pemeriksaan, Anda mungkin akan diminta untuk melepas baju Anda dari pinggang ke bawah. Kemudian Anda diminta untuk berbaring di meja khusus dengan lutut ditekuk. Dokter akan memasukkan alat yang disebut dengan spekulum ke dalam vagina Anda. Alat ini berfungsi untuk melebarkan vagina Anda, sehingga dokter bisa melihat leher rahim Anda dan mengambil sampel sel-sel serviks Anda dengan alat yang disebut spatula.</p>\r\n\r\n<p>Sampel sel-sel serviks Anda ini kemudian ditempatkan dalam wadah yang berisi cairan khusus (tes pap dengan cairan) atau disebarkan dalam slide kaca khusus (tes pap smear konvensional). Dan, selanjutnya dibawa ke laboratorium untuk diperiksa. Tunggu hasilnya satu sampai dua minggu kemudian.</p>\r\n\r\n<p><strong>Kapan harus melakukan pemeriksaan pap smear?</strong></p>\r\n\r\n<p>Menurut American College of Obstetricians and Gynecologists (ACOG), Anda disarankan untuk melakukan pemeriksaan pap smear pertama kali pada usia 21 tahun, terlepas dari apakah Anda sudah aktif secara seksual maupun belum aktif. Namun, jika usia Anda sudah lebih dari 21 tahun, Anda belum terlambat untuk segera memeriksakannya. Lakukan pemeriksaan pap smear segera untuk mencegah atau mengurangi risiko kanker serviks.</p>\r\n\r\n<p>Anda pun disarankan untuk melakukan pap smear secara rutin setiap tiga tahun sekali (tanpa disertai tes HPV), bagi Anda yang berusia 21-30 tahun. Dan, bagi Anda yang berusia lebih dari 30 tahun, Anda disarankan untuk melakukan pap smear (disertai dengan tes HPV) setiap lima tahun sekali.</p>\r\n\r\n<p><strong>Apa yang harus dipersiapkan menjelang pemeriksaan pap smear?</strong></p>\r\n\r\n<p>Jangan sembarangan dalam melakukan pemeriksaan pap smear. Beberapa hal harus Anda persiapkan sebelum melakukan pemeriksaan ini. Jika Anda tidak mempersiapkannya dengan baik, ini bisa memengaruhi hasil tes.</p>\r\n\r\n<p><strong>Beberapa hal yang harus Anda persiapkan sebelum melakukan pap smear yang pertama adalah:</strong></p>\r\n\r\n<ol>\r\n	<li>Lakukan pap smear saat Anda sedang tidak menstruasi. Ketahui siklus menstruasi Anda, sehingga Anda lebih mudah membuat janji dengan dokter untuk melakukan pap smear.</li>\r\n	<li>Jangan membersihkan vagina dengan douche setidaknya tiga hari sebelum pemeriksaan</li>\r\n	<li>Tidak melakukan hubungan seksual selama dua hari sebelum pemeriksaan</li>\r\n	<li>Tidak menggunakan tampon selama dua hari sebelum pemeriksaan</li>\r\n	<li>Tidak menggunakan alat kontrasepsi, seperti busa spermisida, krim, atau jeli, dan obat-obatan vagina selama dua hari sebelum pemeriksaan, karena ini dapat menghilangkan atau mengaburkan sel-sel abnormal</li>\r\n	<li>Kosongkan kandung kemih Anda sebelum melakukan tes untuk kenyamanan Anda (buang air kecil terlebih dahulu)</li>\r\n</ol>\r\n\r\n<p><strong>Di awal pemeriksaan, beritahu dokter Anda jika Anda:</strong></p>\r\n\r\n<ol>\r\n	<li>Sedang hamil atau mungkin hamil</li>\r\n	<li>Memiliki masalah reproduksi atau saluran kemih dengan gejala seperti gatal, luka, bengkak, bau yang tidak biasa, keputihan berlebih</li>\r\n	<li>Menggunakan alat kontrasepsi</li>\r\n	<li>Telah menjalani operasi atau prosedur lain yang berkaitan dengan vagina, leher rahim, rahim, atau vulva</li>\r\n	<li>Ini pemeriksaan pap smear pertama Anda</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>(Sumber https://hellosehat.com)</p>\r\n'),
(54, 'Gejala_Kanker_Serviks_yang_Perlu_Anda_Kenali_Sebelum_Meluas1.jpg', 'Gejala Kanker Serviks yang Perlu Anda Kenali Sebelum Meluas', '<p>Kanker serviks merupakan salah satu penyakit yang paling sering menyerang wanita Indonesia. Penyakit ini disebabkan oleh human papillomavirus (HPV) yang biasanya menular melalui hubungan seksual. Seringnya, wanita sudah telat mengetahui bahwa dirinya terinfeksi virus tersebut. Hal ini karena wanita telat memeriksakan dirinya ke dokter. Untuk itu, penting bagi Anda untuk mengetahui gejala kanker serviks dan memeriksakan diri Anda sejak dini.</p>\r\n\r\n<p><strong>Apa saja gejala kanker serviks?</strong></p>\r\n\r\n<p>Biasanya wanita yang memiliki infeksi virus HPV tidak menunjukkan gejala apapun. Virus ini terkadang dapat hilang dengan sendirinya. Namun, ada juga yang berkembang menjadi kanker serviks. Karena tidak menunjukkan berbagai gejala kanker serviks pada stadium awal, maka tak heran banyak wanita yang mengetahui penyakitnya sudah serius saat diperiksa pertama kali.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Oleh karena itu, penting bagi setiap wanita untuk mengetahui berbagai gejala kanker serviks. Dengan mengetahui gejala kanker serviks, maka wanita bisa mendeteksi kanker serviks sejak dini dan bisa dilakukan pengobatan lebih cepat.</p>\r\n\r\n<p><strong>Gejala awal kanker serviks</strong></p>\r\n\r\n<p>Gejala kanker serviks biasanya akan muncul ketika sel-sel kanker tumbuh melalui permukaan atas jaringan leher rahim ke jaringan di bawahnya. Hal ini terjadi ketika sel-sel prakanker tidak diobati dan akhirnya berubah menjadi sel kanker. Pada saat ini, gejala kanker serviks yang umumnya muncul adalah:</p>\r\n\r\n<p>Perdarahan vagina tidak teratur. Ini merupakan gejala paling umum dari kanker serviks yang sudah berkembang. Perdarahan dapat terjadi di antara periode menstruasi atau setelah Anda berhubungan seksual. Pada wanita menopause, perdarahan juga dapat terjadi walaupun ia sudah tidak menstruasi. Terkadang, perdarahan ini muncul sebagai keputihan yang bercampur dengan darah.</p>\r\n\r\n<p>Keputihan yang tidak biasa. Ini juga bisa menjadi tanda bahwa Anda sedang menderita kanker serviks. Keputihan ini bisa terjadi mulai dari yang berwarna putih bersih sampai berwarna agak kecokelatan, berbau busuk, berair, dan juga bercampur darah.</p>\r\n\r\n<p>Nyeri panggul. Nyeri panggul dapat Anda rasakan selama berhubungan seksual atau pada waktu lain. Ini bisa menjadi tanda bahwa sedang terjadi perubahan yang tidak normal pada serviks Anda.</p>\r\n\r\n<p>Jika Anda sudah mengalami gejala awal tersebut, sebaiknya segera periksakan diri Anda ke dokter.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gejala kanker serviks saat sudah parah</strong></p>\r\n\r\n<p>Gejala lainnya juga bisa muncul saat kanker serviks Anda sudah bertambah parah dan berkembang ke stadium selanjutnya. Gejala kanker serviks selanjutnya adalah:</p>\r\n\r\n<ol>\r\n	<li>Sakit punggung</li>\r\n	<li>Kelelahan</li>\r\n	<li>Penurunan berat badan</li>\r\n	<li>Mengalami kesulitan dalam buang air kecil dan buang air besar atau Anda juga bisa mengalami kebocoran urin atau feses dari vagina</li>\r\n	<li>Pembengkakan pada kaki, salah satu atau keduanya</li>\r\n	<li>Tulang retak</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Apakah kanker serviks bisa dicegah?</strong></p>\r\n\r\n<p>Tentu. Kanker serviks bisa Anda cegah dengan berbagai cara. Mulai dari diri Anda sendiri. Anda dapat mengurangi risiko kanker serviks dengan mengurangi kemungkinan Anda terinfeksi virus HPV. Beberapa cara yang bisa Anda lakukan untuk menghindari infeksi virus HPV adalah:</p>\r\n\r\n<p>Melakukan vaksin HPV. Jika Anda berusia antara 9-26 tahun, ini mungkin cara terbaik untuk melindungi diri Anda dari infeksi virus HPV. Vaksin HPV dapat memperkuat kekebalan tubuh Anda dalam melawan virus HPV (jika sewaktu-waktu masuk ke dalam tubuh Anda). Disarankan agar Anda mendapatkan vaksin HPV sebelum Anda aktif secara seksual.</p>\r\n\r\n<p>Melakukan <strong>pap smear secara rutin</strong>. Dengan melakukan pap smear, Anda dapat melihat perubahan-perubahan yang terjadi pada sel di serviks Anda. Sehingga, sel yang mengarah ke kanker serviks dapat dideteksi lebih dini dan bisa dilakukan pencegahan. Bicarakan dengan dokter Anda seberapa sering Anda harus melakukan pap smear berdasarkan usia dan kondisi medis Anda.</p>\r\n\r\n<p>Melakukan hubungan seksual yang aman. Ingat, virus HPV menyebar melalui kontak seksual. Sehingga, sangat disarankan agar Anda selalu melakukan hubungan seksual yang aman, seperti selalu menggunakan kondom dan tidak berganti-ganti pasangan.</p>\r\n\r\n<p>Tidak merokok. Wanita yang merokok memiliki risiko yang lebih besar untuk mengembangkan kanker serviks.</p>\r\n\r\n<p>(Sumber : https://hellosehat.com)</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id_client` int(100) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `email_rs` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id_client`, `nama_rs`, `email_rs`, `password`) VALUES
(1, 'rumah sakit harapan mulya', 'harapan@gmail.com', 'DvImXQOx'),
(2, 'harapanbunda', 'hara@gmail.com', 'QbSF85gj'),
(7, 'rumah sakit ibu dan anak', 'ibuanak@gmail.com', 'FeDhot8J');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `pesan`) VALUES
(1, 'prima', 'prima.alri.putra@gmail.com', '087839960709', 'apa yang sedang terjadi'),
(2, 'prima', 'prima.alri.putra@gmail.com', '0878', 'APA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploadpdf`
--

CREATE TABLE `uploadpdf` (
  `id_pdf` int(99) NOT NULL,
  `id_client` int(99) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `nama_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uploadpdf`
--

INSERT INTO `uploadpdf` (`id_pdf`, `id_client`, `tanggal`, `nama_pdf`) VALUES
(22, 7, '09-07-2019', 'Cetak_Kartu_Rencana_Studi_-_Portal_UAD_prima.pdf'),
(23, 7, '09-07-2019', 'MTP_ISI_LAPORAN.pdf'),
(24, 1, '09-07-2019', 'Cetak_Kartu_Rencana_Studi_-_Portal_UAD_prima1.pdf'),
(25, 1, '09-07-2019', 'Cetak_Kartu_Rencana_Studi_-_Portal_UAD_prima2.pdf'),
(26, 1, '15-07-2019', 'Proses_Bisnis.pdf'),
(27, 7, '18-07-2019', 'Cetak_Kartu_Rencana_Studi_-_Portal_UAD_prima3.pdf'),
(28, 1, '18-07-2019', 'MTP_ISI_LAPORAN1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'prima alri putra', 'primaap21@gmail.com', 'default.jpg', '$2y$10$awWAxhkrTE2MXtqQ82ltY.d6hR6N.IQL6JdveeANTyg6G7f6WOS/.', 1, 1, 1562724155);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadpdf`
--
ALTER TABLE `uploadpdf`
  ADD PRIMARY KEY (`id_pdf`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploadpdf`
--
ALTER TABLE `uploadpdf`
  MODIFY `id_pdf` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
