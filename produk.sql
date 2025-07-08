mysql-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2024 at 09:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produk_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint NOT NULL,
  `kategori_id` bigint DEFAULT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `konten_produk` text COLLATE utf8mb4_general_ci,
  `gambar_cover` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lampiran` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama_produk`, `konten_produk`, `gambar_cover`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Alexandria Leather Sofa', 'Pola solid Alexandria Sofa cocok dengan hampir semua dekorasi dan menghadirkan nuansa kontemporer ke ruang Anda. Jok kulit imitasinya yang tahan lama membungkus bantalan tebal yang subur pada bingkai kayu untuk memastikan kenyamanan dan daya tahan. Bantal kursi pengganti tersedia saat bantal Anda aus.', 'sofa.jpg', NULL, '2024-07-16 20:44:44', '2024-07-16 16:21:22'),
(2, 2, 'Samsung Z Flip 6', 'Samsung Galaxy Z Flip 6 yang dirilis pada Juli 2024 memiliki beberapa peningkatan dibandingkan pendahulunya, Flip 5. Berikut adalah spesifikasi utama Samsung Galaxy Z Flip 6:\n\nDimensi:\n\nTerbuka: 165.1 x 71.9 x 6.9 mm\nTertutup: 85.1 x 71.9 x 14.9 mm\nBerat: 187g\nLayar:\n\nUtama: 6.7 inci Dynamic AMOLED 2X, refresh rate 1~120Hz, resolusi 1080 x 2640\nCover: 3.4 inci Super AMOLED, refresh rate 60Hz, resolusi 720 x 748\nSistem Operasi: Android 14 dengan One UI 6.1.1\n\nChipset: Qualcomm Snapdragon 8 Gen 3\n\nKamera:\n\nBelakang: Dual kamera\n50MP (f/1.8, 1.0μm) wide\n12MP (f/2.2, 1.22μm) ultra-wide\nDepan: 10MP (f/2.2, 1.22μm)\nRAM: 8GB\n\nPenyimpanan: 256GB atau 512GB, tidak dapat diperluas\n\nBaterai: 4000mAh, mendukung pengisian cepat 25W, pengisian nirkabel 15W, dan pengisian balik nirkabel 4.5W\n\nKonektivitas & Jaringan: 5G, LTE, Wi-Fi 6E, Bluetooth 5.3, Nano SIM, eSIM\n\nKetahanan Air: IP48\n\nPilihan Warna: Silver Shadow, Kuning, Biru, Mint, Crafted Black, Putih, Peach\n\nFitur Tambahan:\n\nSistem pendingin ruang uap pertama pada ponsel Flip yang ukurannya 150% lebih besar dibandingkan dengan Galaxy S23 Ultra​ (TechRadar)​​ (Samsung us)​​ (PhoneArena)​.', 'samsung.jpg', 'samsungz.pdf', '2024-07-16 20:45:21', '2024-07-17 05:35:12'),
(3, 3, 'Honda Civic RS', 'Honda Civic RS adalah varian dari Honda Civic yang menonjolkan performa sporti dan fitur canggih. Berikut adalah beberapa spesifikasi umum dari Honda Civic RS:\n\nMesin dan Performa\nTipe Mesin: 1.5L VTEC Turbo, 4 silinder\nKapasitas Mesin: 1.498 cc\nTenaga Maksimum: 173 PS pada 5.500 rpm\nTorsi Maksimum: 220 Nm pada 1.700-5.500 rpm\nTransmisi: CVT (Continuously Variable Transmission)\nDimensi\nPanjang: 4.630 mm\nLebar: 1.799 mm\nTinggi: 1.416 mm\nJarak Sumbu Roda: 2.700 mm\nJarak Pijak Depan/Belakang: 1.547/1.573 mm\nFitur Eksterior\nLampu Depan: LED dengan DRL (Daytime Running Light)\nLampu Belakang: LED\nVelg: 18 inci\nSunroof: Tersedia\nSpoiler Belakang: Tersedia\nFitur Interior\nSistem Hiburan: Layar sentuh 7 inci dengan Apple CarPlay dan Android Auto\nSistem Suara: 8 speaker premium\nKursi: Kulit dengan penyesuaian elektrik\nAC: Dual-zone climate control\nPengaturan Stir: Tilt and telescopic\nFitur Keselamatan\nAirbags: Dual front, side, dan curtain airbags\nSistem Rem: ABS dengan EBD dan BA\nStabilitas Kendaraan: VSA (Vehicle Stability Assist)\nKamera Belakang: Multi-angle rearview camera\nSensor Parkir: Depan dan belakang\nFitur Honda Sensing: Termasuk Collision Mitigation Braking System (CMBS), Adaptive Cruise Control (ACC), Lane Keeping Assist System (LKAS), Road Departure Mitigation (RDM), dan Forward Collision Warning (FCW).', 'civic.jpeg', NULL, '2024-07-16 20:46:35', '2024-07-16 16:30:47'),
(4, 2, 'MSI Katana 17 ', 'Processor : Intel® Core™ i9-13900H Processor 24M Cache, up to 5.40 GHz\nDisplay : 17.3″ QHD(2560×1440), 240Hz Refresh Rate, IPS-Level, 100% DCI-P3(Typical)\nRAM : 16GB (8GB*2, DDR5-5200), 2 Slots, Max 64GB\nStorage : 1TB NVMe PCIe SSD Gen4x4, 2x M.2 SSD slot (NVMe PCIe Gen4)\nGraphics : NVIDIA® GeForce RTX™ 4060 Laptop GPU 8GB GDDR6, Up to 2250MHz Boost Clock 105W Maximum Graphics Power with Dynamic Boost. *May vary by scenario\nKeyboard : 4-Zone RGB Gaming Keyboard\nWireless : Intel Wi-Fi 6 AX201(2*2 ax) + BT5.2\nPorts : 1x Type-C (USB3.2 Gen1 / DP); 2x Type-A USB3.2 Gen1; 1x Type-A USB2.0; 1x HDMI™ 2.1 (8K @ 60Hz / 4K @ 120Hz); 1x RJ45; 1x Mic-in/Headphone-out Combo Jack\nCamera : HD type (30fps@720p)\nAudio : 2x 2W Audio Speaker, Nahimic 3 Audio Enhancer, Hi-Res Audio Ready\nBattery :3-Cell 53.5 Battery (Whr), 200W Adapter\nSKU : 9S7-17L541-632\nColor : Black\nFree : MSI Essential Backpack\nOS : Windows 11 Home + OHS 2021\nGaransi Resmi MSI 2 Tahun', 'msi.jpg', NULL, '2024-07-16 16:55:10', '2024-07-16 16:55:22'),
(5, 2, 'XIAOMI SOLOVE Kipas Angin Meja Portable Rechargeable 4000mAh - F5-FAN - Black', 'imple Design\n\n			Kipas angin Xiaomi ini hadir dengan desain yang sangat simple. Anda tidak memerlukan banyak space untuk kipas ini namun sangat efektif untuk menghilangkan hawa panas di rumah Anda.\n\n			\n			\n		\n			Wide Angle Air Supply\n\n			Layaknya kipas angin lainnya kipas ini dapat memutar hingga 60 derajat ke samping dan 27 derajat ke atas dan bawah sehingga Anda dapat mengatur kipas ini saat penggunaan.\n\n			\n			\n		\n			Three Speed Wind optional\n\n			Terdapat 3 kecepatan yang Anda dapat gunakan dalam 1 tombol untuk mengoprasikan Kipas SOLOVE ini. \n\n			\n			\n		\n			\n			\n			\n			\n		\n			USB Fast Charging\n\n			Kipas ini hadir dengan Type C Interface serta USB sehingga Anda dapat mencolokan kipas ini pada laptop atau charging devices lainnya.\n\n			\n			\n		\n			Best Quality Motor with Low Noise\n\n			Kipas ini hadir dengan Copper core motor sehingga tidak mengasilkan suara yang mengganggu saat penggunaan. Kipas angin ini menggunakan mesin yang berkualitas tinggi sehingga mampu menghasilkan hembusan angin yang kuat. Anda akan merasakan kesejukan ketika menggunakan kipas angin ini.\n\n			\n			\n		\n			Easy To Clean\n\n			Jika Kipas ini kotor Anda dapat dengan mudah membersihkannya. Anda dapat mencopot bagian depan untuk membersihkan kipas ini dan memasangnya kembali.\n\n			\n			\n		Product Showcase', 'kipas.jpeg', NULL, '2024-07-17 05:33:03', '2024-07-17 05:33:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_produk_kategori_produk` (`kategori_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
