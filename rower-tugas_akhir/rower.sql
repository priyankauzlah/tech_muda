-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 08:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Anis Rohmadi', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_ketegori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `halaman` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_ketegori`, `judul`, `gambar`, `penerbit`, `pengarang`, `halaman`, `harga`, `stok`) VALUES
(11, 11, ' PKN', '20170217164334.jpg', '  PT. Sapi Bentong', 'Bang Bokep', ' 100', ' 1000000', '68'),
(22, 22, 'B. Inggris', '20170217164457.jpg', 'CV. Kurang Ngondol', 'Atok', '200', '2000000', '53'),
(33, 33, 'Kimia', '20170217164635.png', 'Firma Kurang Belaian', 'Nopal', '10', '500000', '0'),
(44, 44, 'PHP', '20170217164739.jpg', 'CV. nguntul', 'abdul', '100', '5000000', '23'),
(55, 55, 'Bisnis Online', '20170217164900.jpg', 'PT. Sok Ganteng', 'yahya', '10', '100000', '50'),
(66, 22, ' Base COC', '20170217202459.jpg', ' PT. Kurang Turu', ' prof. Ir. Dr. Diko s.kom', ' 20', ' 99000000', '52'),
(77, 33, 'Sistem Operasi', '20170221040107.jpg', 'smk al kh', 'guru', '100', '200000', '40'),
(88, 22, 'Desain Grafis', '20170221040253.jpg', 'Pt. morak marek', 'sayonggg', '50', '100000', '15'),
(89, 56, 'Iqro', '20220915201057.jpg', 'Kompas', 'H. Samiun', '50', '45000', '8'),
(90, 4, '', '20230913061507.png', '', '', '', 'x c', 'xc '),
(91, 4, '', '20230913061952.png', '', '', '', 'x c', 'xc ');

-- --------------------------------------------------------

--
-- Table structure for table `chekout`
--

CREATE TABLE `chekout` (
  `id_chekout` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_terima` enum('belum di terima','sudah diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chekout`
--

INSERT INTO `chekout` (`id_chekout`, `id_pembeli`, `nama`, `alamat`, `nomor_tlp`, `tanggal`, `status_terima`) VALUES
(24, 30, 'Anis Rohmadi M.Kom.', 'Jl. Lurus Sekali No.1 Jakarta', '5345353', '02-09-2023', 'sudah diterima'),
(27, 32, '', '', '', '14-09-2023', 'sudah diterima'),
(28, 32, 'x xc', 'c z', 'zx ', '14-09-2023', 'belum di terima');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pembeli`, `nama`, `username`, `password`) VALUES
(11, 'Pembeli1', 'Pembeli1', 'Pembeli1'),
(30, 'Anis Baswedan', 'admin2', 'admin2'),
(31, 'uwais', 'uwais', 'uwais'),
(32, 'uzlah', 'uzlah', 'uzlah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_ketegori` int(11) NOT NULL,
  `kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_ketegori`, `kategori`) VALUES
(1, 'Mountain\r\n'),
(2, 'Road'),
(3, 'City'),
(4, 'Electric'),
(5, 'Kids'),
(6, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pembeli`, `id_buku`, `qty`, `harga`, `total_harga`, `total_bayar`) VALUES
(38, 11, 33, '44', '500000', '22000000', ''),
(42, 22, 44, '5', '5000000', '25000000', ''),
(47, 30, 89, '2', '45000', '90000', '');

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id_sepeda` int(11) NOT NULL,
  `id_ketegori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(11) NOT NULL,
  `stok` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id_sepeda`, `id_ketegori`, `nama`, `gambar`, `deskripsi`, `harga`, `stok`) VALUES
(1, 1, 'Domane+ SLR 6 AXS', 'domane.png', 'The Domane+ SLR 6 is a category-redefining carbon e-road bike that doesn\'t look, fit or feel like a standard e-bike. It\'s built on an 800 Series OCLV Carbon frame that hides a compact and refined motor to elevate your ride with natural-feeling assist. The motor quietly blends in with the elements, all but disappearing under you on peaceful solo outings and club rides, so you stay more connected to the experience while enjoying extra power for crushing climbs and long, epic adventures. To top it ', '5999999', '0'),
(12, 1, 'Farley 9.6', 'Farley96.png', 'The Farley 9.6 is a capable and ready carbon fatbike for riders who want to charge through snow drifts and sand dunes. Its OCLV carbon frame keeps your ride light, while huge 4.5-inch tyres keep you floating in the deep stuff. Its built up with a SRAM GX Eagle drivetrain that you can count on for precise shifts and strong braking power, even when things get icy.', '14000000', '85'),
(13, 1, 'Farley 9 Winter Edition', 'Farley9.png', 'The Farley 9 Winter Edition is the ultimate fat bike for the explorer who doesn\'t want to hold back. What sets this Farley apart is its fully-equipped, frame-specific package of racks and bags for loading up with everything you need to get far, far, far beyond the beaten track. Its extra-wide 4.5-inch tyres give you amazing traction over loose terrain and the new progressive trail geometry gives you extra stability and efficient pedalling. The frame and fork are loaded with extra mounts for adding even more accessories.', '23000000', '43'),
(16, 2, 'Domane SLR 9 Gen 4', 'DomaneSLR9.png', 'The Domane SLR 9 is our top ultra-light carbon endurance road bike decked out with the highest-end parts made for a fast, high-performance ride. You get our highest level OCLV Carbon frame with rear IsoSpeed, a wireless Shimano Dura-Ace Di2 electronic drivetrain for precision shifting and OCLV Carbon wheels. Plus, it has an easy-access storage compartment for stowing ride essentials, and versatile 38c tyre clearance to keep you floating on rough roads and light gravel.', '4500000', '78'),
(17, 2, 'Domane SLR 7 Gen 4', 'DomaneSLR7.png', 'The Domane SLR 7 is an ultra-light carbon endurance road bike with high-end parts made for a fast, high-performance ride. You get our highest-level OCLV Carbon frame with rear IsoSpeed, an all-new wireless electronic Shimano Ultegra Di2 drivetrain for precision shifting and OCLV Carbon wheels. Plus, it has an easy-access storage compartment for stowing ride essentials and versatile 38c tyre clearance to keep you floating on rough roads and light gravel.', '6999999', '58'),
(18, 3, 'Allant+ 9 Lowstep', 'Allant_Plus_9_Low.png', 'The Allant+ 9 Lowstep is built for e-bike riders who value high-performance, style and capability. It\'s the ideal choice for commuters who favour the power, reliability and connectivity of Bosch smart system, riders who appreciate great design, and anyone who\'s tired of queuing in traffic and paying for parking. Plus, the suspension fork and seat post deliver road-smoothing comfort, a belt drive and a CVT hub to reduce maintenance.', '4333333', '312'),
(19, 3, 'Loft Go! 7D EQ', 'LoftGo7DStepThru.png', 'The Loft Go! 7D is a lightweight e-bike that elevates your daily commute. With a simple and intuitive e-system and 7 speeds, it provides the range needed to take you to the edge of your city and everywhere in between. This modern-day classic was designed with both versatility and style in mind for rides to your local record shop or corner shop.', '999999', '77'),
(20, 4, 'Kakau Cruiser Go!', 'KakauCruiser.png', 'K?kau Go! is an homage to the islands that make up Polynesia, the birthplace of surf. The Matte Ember frame, reminiscent of lava rock that can be found throughout the islands, is complimented by a tribal pattern inspired by the traditional tattoo art form, known as K?kau. A wood grain underlay throughout represents the Koa tree and wood used for early surfboards. Customised grips, saddle and bell complete this outstanding e-bike.', '15000000', '78'),
(21, 4, 'Townie Commute Go! 5i EQ', 'TownieCommute.png', 'The Townie Commute Go! 5i is a stylish commuter e-bike built to handle the rigours of the road. It offers the comfort and control of an Electra paired with Bosch e-bike technology. Colour-matched front and rear racks and mudguards allow riders to go the distance in style and the upright seating position provides a wide view of the road so you can spot potholes, detours or the closest cafe.', '13333333', '42'),
(22, 5, 'Precaliber 16', 'Precaliber16.png', 'The Precaliber 16 Freewheel makes it easy and fun for kids to learn how to ride. This bike has one speed and two handbrakes, so your child can gain confidence using brake levers. It also has a handle integrated into the saddle so you can guide while they ride and tool-free training wheels that are super easy to install and remove. It\'s a great fit for kids aged 4-5, between 39–46? (99–117 cm) tall.', '1200000', '33'),
(23, 5, 'Wahoo 26', 'Wahoo26_21.png', 'Wahoo 26 is a lightweight, simple and practical kids\' hybrid bike that makes it easy for your little one to make the most of every ride. This versatile bike is built for ease of use: it\'s light, capable on a variety of surfaces and equipped with a 1x8 drive train and a wide range of gearing for wherever your little one roams. Fit for riders 134 cm to 167.6 cm/58-63? tall.', '4300000', '67'),
(24, 6, 'Trek Commuter Pro RT Flare RT Bike Light Set', 'TrekLight.png', 'Our best pair of lights. Daytime running lights for visibility and Kindbeam that lights the way while staying out of oncoming riders\' eyes.', '63000', '351'),
(25, 6, 'Bontrager Aeolus RSL 75 TLR Road Wheel', 'BontragerAeolus.png', 'Bontrager’s marquee carbon road wheel in an ultra-aero 75 mm depth, designed for the ultimate speed and stability on time trials and triathlon splits.', '499999', '785'),
(26, 6, 'Coral Reef Small Ding Dong Bike Bell', 'DingDongBell.png', 'Let people know you’re coming through. And do it in style.', '399000', '43'),
(27, 6, 'Bontrager TLR Flash Charger Floor Pump', 'BontragerFlash.png', 'Bontrager TLR Flash Charger Floor Pump', '250000', '751'),
(28, 6, 'Electra Koinobori Domed Ringer Bike Bell', 'BellKoinobori.png', 'Let people know you’re coming through. And do it in style.', '300000', '462'),
(29, 6, 'Electra Disco Small Ding-Dong Bike Bell', 'Disco.png', 'Let people know you\'re coming through. And do it in style.', '399000', '744'),
(30, 2, 'FX 2 Disc', 'FX2Disc.png', 'FX 2 Disc is a stylish and versatile hybrid bike with disc brakes that let you stop on a penny and ask for change, even when the weather isn\'t cooperating. Train, commute or ride for fun with the lightweight aluminium frame, 18 speeds, and semi-skinny tyres that are fast on the road and stable on loose terrain.', '5900000', '33'),
(31, 2, 'Verve 1 Disc Lowstep', 'Verve1.png', 'Verve 1 Disc Lowstep is an introductory hybrid bike designed for comfort and confidence on recreational rides. It has a lowstep frame that makes it easy to mount and dismount, disc brakes that provide stopping power in any weather and wide tyres for extra stability. This ride is dependable, affordable and full of features that make for comfortable everyday adventures.', '4600000', '86'),
(32, 1, 'Fuel EX 9.9 XTR Gen 5', 'FuelEX99XTR.png', 'Fuel EX 9.9 makes no compromises. Top-shelf suspension, carbon everything and a super-smooth Shimano XTR drive train make this ripper ready to rule any trail in style. It\'s fast, it\'s light, and it\'s got everything you need to crush your next trail ride.', '9999999', '5'),
(33, 3, 'Verve+ 4', 'Verve_Plus_4.png', 'Verve+ 4 is an electric hybrid bike perfect for riders looking to go far and have fun on daily commutes, recreational rides and workouts. It features a reliable Bosch Performance Line drive unit and a fully-integrated 500 Wh Bosch PowerTube battery so you can cover more distance on a single charge. This e-bike comes equipped with parts that put your comfort and safety first, like road-smoothing Forklight 3.0 suspension with an integrated front light, a suspension seat post and wide, stable tyres.', '24000000', '54'),
(34, 4, 'Verve+ 1', 'VervePlus1_.png', 'Verve+ 1 is an electric bike that will help you get out and ride more. Your daily cruises, commutes, and workouts will all get a boost from the reliable and powerful Bosch pedal-assist system. Plus, this e-bike is equipped with parts that put your comfort and safety first, like a road-smoothing suspension fork, ergonomic touchpoints, reliable hydraulic disc brakes, wide, stable tyres, and front and rear lights.', '12000000', '86'),
(35, 5, 'Under the Sea 1 16in Girls\'', 'Under_the_Sea.png', 'Electra Classic high-tensile steel, Flat Foot Technology', '966000', '29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `chekout`
--
ALTER TABLE `chekout`
  ADD PRIMARY KEY (`id_chekout`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ketegori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id_sepeda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `chekout`
--
ALTER TABLE `chekout`
  MODIFY `id_chekout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ketegori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id_sepeda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
