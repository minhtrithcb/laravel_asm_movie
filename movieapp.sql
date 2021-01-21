-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 20, 2021 lúc 02:02 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `movieapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `actor`
--

CREATE TABLE `actor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `director`
--

CREATE TABLE `director` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `director`
--

INSERT INTO `director` (`id`, `name`, `slug`, `birthday`, `nationality`, `image`, `story`, `view`, `active`) VALUES
(1, 'Martin Scorseses', 'martin-scorseses', '17 tháng 11, 1942 (78 tuổi)', 'Thành phố New York, Hoa Kỳ', 'dd1.jpg', 'Martin Scorsese sinh năm 1942 tại thành phố New York trong một gia đình gốc Ý. Bố của Martin là ông Luciano Charles Scorsese (1913–1993) còn mẹ là bà Catherine Scorsese (1912–1997), cả hai đều làm việc ở Garment District của thành phố New York[2]. Ngay từ khi còn nhỏ Martin đã bộc lộ niềm yêu thích với điện ảnh, đặc biệt là với các tác phẩm của Chủ nghĩa hiện thực mới Ý như Kẻ cắp xe đạp (Ladri di biciclette)[3]. Vì niềm yêu thích này Scorsese đã theo học tại Trường Điện ảnh của Đại học New York (NYU phim school), tại đây ông đã giành được bằng cử nhân và thạc sĩ nghệ thuật (Master of Fine Arts) chuyên ngành đạo diễn năm 1966[4]. Trong thời gian học ở trường Martin đã thực hiện một số bộ phim ngắn như What\'s a Nice Girl Like You Doing in a Place Like This? (1963), It\'s Not Just You, Murray! (1964) và The Big Shave (1967).', '0', '0'),
(2, 'Steven Spielberg', 'steven-spielberg', '18 tháng 12, 1946 (74 tuổi)', 'Cincinnati, Ohio, Mỹ', 'dd2.jpg', 'Steven Allan Spielberg KBE (/ˈspiːlbɜːrɡ/; sinh ngày 18 tháng 12 năm 1946) là một đạo diễn, nhà sản xuất kiêm biên kịch phim người Mỹ gốc Do Thái. Ông được coi là một trong những người tiên phong của kỷ nguyên điện ảnh New Hollywood và là một trong những đạo diễn kiêm nhà sản xuất điện ảnh nổi tiếng nhất trong lịch sử.[2] Sau khi có được sự chú ý từ Hollywood với một số các tác phẩm chiếu rạp nhỏ lẻ, Spielberg bắt đầu nổi lên sau khi dự án Hàm cá mập (1975) mà ông đóng vai trò đạo diễn được ra mắt, và giành được thành công lớn về mặt chuyên môn cũng như thương mại, đồng thời mở ra định nghĩa mới về phim bom tấn mùa hè.[3] Các tác phẩm sau đó của ông chủ yếu đi theo thể loại khoa học viễn tưởng như Kiểu tiếp xúc thứ 3 (1977), loạt phim Indiana Jones, E.T. Sinh vật ngoài hành tinh (1982), và loạt phim Công viên kỷ Jura vốn được coi như nguyên mẫu của lối làm phim Hollywood theo trường phái thoát ly.[4]', '0', '1'),
(3, 'Quentin Tarantino', 'quentin-tarantino', '27 tháng 3, 1963 (57 tuổi)\n            ', 'Mỹ', 'dd3.jpg', 'Quentin Jerome Tarantino (/ˌtærənˈtiːnoʊ/; sinh ngày 27 tháng 3 năm 1963)[1] là nhà làm phim và nam diễn viên người Mỹ. Các tác phẩm điện ảnh của ông nổi bật bởi cốt truyện phi tuyến tính, miêu tả nét thẩm mỹ trong yếu tố bạo lực, những phân cảnh đối thoại mở rộng, dàn diễn viên hùng hậu, những mối liên hệ đến văn hóa đại chúng và hàng loạt bộ phim khác, soundtrack chủ yếu chứa các ca khúc và bản nhạc nền từ thập niên 1960 đến thập niên 1980, lịch sử thay thế và mang màu sắc phim đen mới.', '0', '1'),
(4, 'Christopher Nolan', 'christopher-nolan', '30 tháng 7, 1970 (50 tuổi)\n            ', 'Anh Quốc, Hoa Kỳ', 'dd4.jpg', 'Christopher Edward Nolan (/ˈnoʊlən/; sinh ngày 30 tháng 7 năm 1970) là một đạo diễn, nhà biên kịch và nhà sản xuất điện ảnh người Anh. Ông sở hữu cả hai quốc tịch Anh và Mỹ. Nolan là một trong những đạo diễn ăn khách nhất lịch sử, đồng thời là một trong những nhà làm phim được hoan nghênh nhất và có tầm ảnh hưởng lớn nhất của thế kỉ 21.', '0', '1'),
(5, 'Alfred Hitchcock', 'alfred-hitchcock', '13 tháng 8 năm 1899', 'London, Anh', 'dd5.jpg', 'Alfred Joseph Hichcock sinh ngày 13 tháng 8 năm 1899 ở ngoại ô thành phố London trong một gia đình công giáo. Bố mẹ ông, William và Emma, những người buôn bán nhỏ, có ba người con, William sinh năm 1890, Hichcock và con út Eileen, sinh năm 1892. Những năm tuổi thơ, Hichcock là một đứa trẻ cô đơn và nhút nhát, ông thú nhận ngày bé ông không có nhiều bạn bè và thường chơi đùa một mình. Một vài sự kiện tuổi thơ được tái hiện trong những bộ phim của ông sau này. Alfred Hitchcock rất ghét cảnh sát, điều đó giải thích bởi khi mới 4, 5 tuổi, ông đã phải trải qua một vài ngày trong đồn cảnh sát. Tôn giáo cũng bị chỉ trích trong các phim của ông, Hichcock có những ấn tượng xấu về một trường dòng mà ông đã từng học.', '0', '1'),
(6, 'Stanley Kubrick', 'stanley-kubrick', '26 tháng 7, 1928', 'Thành phố New York, Hoa Kỳ', 'dd6.jpg', 'Stanley Kubrick sinh ngày 26 tháng 7 năm 1928 tại Bệnh viên Lying-In thuộc khu Manhattan, Thành phố New York. Stanley là con đầu lòng của ông Jacques Leonard Kubrick (1901–1985) và bà Gertrude (1903–1985]]). Năm 1934 Stanley có thêm một người em gái là Barbara.\n\n            Kubrick học phổ thông tại trường William Howard Taft High School từ năm 1941 đến năm 1945.[1] Là một học sinh tồi, Stanley tốt nghiệp năm 1945 với điểm trung bình chỉ là 67/100[2] và không thể hi vọng tiếp tục học cao hơn khi các cựu chiến binh Chiến tranh thế giới thứ hai đang tràn ngập các trường đại học và cao đẳng.\n            \n            Trong thời gian học phổ thông, Stanley Kubrick được chọn là người chụp ảnh chính thứ của trường và sau khi tốt nghiệp ông quyết định theo đuổi nghề này bằng việc bán ảnh cho tạp chí Look ở thành phố New York. Stanley còn kiếm sống thêm bằng nghề đánh cờ vua ở Công viên Washington Square và những câu lạc bộ cờ ở khu Manhattan.[3] Trong thời gian làm phóng viên ảnh cho tạp chí Look, ngày 29 tháng 5 năm 1948, Kubrick làm đám cưới với Toba Metz (khi đó mới 18 tuổi), hai người sống ở khu Greenwich Village, đến năm 1951 thì họ ly dị.', '0', '1'),
(7, 'David Fincher', 'david-fincher', '28 tháng 8, 1962 (58 tuổi)\n            ', 'Denver, Colorado, Hoa Kỳ.', 'dd7.jpg', 'Fincher sinh ngày 28 tháng 8 năm 1962 tại Denver, Colorado (Hoa Kỳ). Mẹ ông là Claire Mae Boettcher, một y tá, còn cha ông là Howard Kelly Fincher, nhân viên văn phòng.[1] Ảnh hưởng từ bộ phim Butch Cassidy and the Sundance Kid, Fincher bắt đầu làm phim từ năm 8 tuổi với máy quay phim 8mm. Từ đó ông theo đuổi sự nghiệp điện ảnh, bắt đầu bằng những công việc tay chân trong hãng John Korty’s Korty Films. Sau đó ông được nhận vào Industrial Light & Magic năm 1983, nơi ông tham gia vào công tác sản xuất trong những phim nổi tiếng như Twice Upon a Time, Star Wars: Episode VI – Return of the Jedi, và Indiana Jones and the Temple of Doom. Năm 1984, ông rời ILM để đạo diễn một quảng cáo của Hội Bệnh nhân ung thư Hoa Kỳ. Ông tiếp tục làm thêm nhiều quảng cáo cho Revlon, Converse, Nike, Pepsi, Sony, và Levi\'s, sau đó chuyển sang làm video ca nhạc.', '0', '1'),
(8, 'Francis Ford Coppola', 'francis-ford-coppola', '7 tháng 4, 1939 (81 tuổi)\n            ', 'Mỹ', 'dd8.jpg', 'Ông sinh tại thành phố Detroit tiểu bang Michigan. Bố ông là nghệ sĩ sáo nổi tiếng Carmine Coppola khi đó đang biểu diễn cho Dàn nhạc giao hưởng Detroit, mẹ ông là một phụ nữ Ý và Coppola là con thứ hai trong số 3 người con của nhà Coppola. Hai năm sau Carmine Coppola trở thành nghệ sĩ sáo chính cho Dàn nhạc giao hưởng NBC và cả gia đình chuyển đến Long Island thuộc tiểu bang New York nơi Francis sống phần lớn tuổi thơ của mình. Khi còn nhỏ Coppola bị bại liệt làm cậu thường xuyên phải ngồi yên một chỗ rất lâu, giúp Francis có thời gian thỏa mãn sự tưởng tượng của mình với việc sản xuất một nhà hát của những con rối tự làm. Sử dụng máy quay 8mm của ông Carmine, Francis bắt đầu tập quay phim khi cậu lên 10. Sau đó Coppola vào học ngành sân khấu tại trường Đại học Hofstra trước khi nhận bằng Thạc sĩ nghệ thuật chuyên ngành đạo diễn tại trường điện ảnh của UCLA. Cũng tại đây Francis gặp Jim Morrison, ca sĩ nổi tiếng và là người sáng tác nhạc cho bộ phim Apocalypse Now sau này của ông.', '0', '1'),
(9, 'Ridley Scott', 'ridley-scott', '30 tháng 11, 1937 (83 tuổi)\n            ', 'South Shields, County Durham, England, UK', 'dd9.jpg', 'Sir Ridley Scott (sinh 30 tháng 11 năm 1937) là một đạo diễn và nhà sản xuất phim người Anh. Sau bước đột phá thương mại của mình với bộ phim viễn tưởng kinh dị Alien (1979), những tác phẩm nổi tiếng nhất của ông bao gồm bộ phim khoa học viễn tưởng đột phá không tưởng neo-noir Blade Runner (1982), bộ phim lịch sử và đạt giải phim hay nhất Oscar Gladiator (2000) và khoa học viễn tưởng bộ phim The Martian (2015).\n\n            Scott nổi tiếng nghiêm túc, phong cách thị giác tập trung cao.[1][2] Mặc dù các bộ phim của ông có phạm vi trải rộng trong cách sắp đặt và thời kỳ, nhưng thường xuyên giới thiệu những hình ảnh đáng ghi nhớ về môi trường đô thị, cho dù thành Rome thế kỷ 2 (Gladiator), thành Jerusalem thế kỷ 12 (Kingdom of Heaven), Anh thời Trung cổ (Robin Hood), Mogadishu đương đại (Black Hawk Down), những cảnh thành phố trong tương lai của Blade Runner, hoặc các hành tinh xa xôi trong Alien, Prometheus, The Martian và Alien: Covenant. Bộ phim của ông cũng được biết đến với những nhân vật nữ mạnh mẽ.[3] Được giới thiệu vào Science Fiction Hall of Fame năm 2007, vào năm 2017 báo Đức FAZ so sánh ảnh hưởng của Scott đối với thể loại khoa học viễn tưởng cũng như Alfred Hitchcock với thể loại phim kinh dị và John Ford với phim viễn Tây.[4]\n            \n            Scott đã được đề cử ba giải Oscar cho đạo diễn xuất sắc nhất (cho Thelma & Louise, Gladiator và Black Hawk Down).[1] Năm 1995, cả Ridley và anh trai ông, ông Tony, đều nhận được một BAFTA dành cho đóng góp nổi bật cho Điện ảnh Anh quốc.[5] Năm 2003, Scott được phong tước hiệp sĩ cho \'đóng góp của mình cho ngành công nghiệp điện ảnh Anh\'.[6] Trong cuộc bình chọn BBC năm 2004, Scott được mệnh danh là người có ảnh hưởng lớn thứ 10 trong nền văn hoá Anh.[7] Năm 2015, ông nhận bằng tiến sĩ danh dự từ trường Cao đẳng Nghệ thuật Hoàng gia ở London.\n            ', '0', '1'),
(10, 'Guillermo del Toro', 'guillermo-del-toro', '9 tháng 10, 1964 (56 tuổi)', 'Zapopan, Jalisco, México\n            ', 'dd10.jpg', 'Guillermo del Toro Gómez (tiếng Tây Ban Nha: [ɡiˈʝeɾmo ðel ˈtoɾo]; sinh ngày 9 tháng 10 năm 1964) là một đạo diễn phim, biên kịch, nhà sản xuất và tiểu thuyết gia người México. Trong sự nghiệp làm phim của mình, ông đã theo đuổi dòng phim kỳ ảo đen với những tác phẩm tiếng Tây Ban Nha như The Devil\'s Backbone (2001) và Pan\'s Labyrinth (2006), đồng thời ông cũng làm nhiều bộ phim hành động Mỹ đại chúng, như phim về siêu anh hùng ma cà rồng Blade II (2002), phim siêu anh hùng siêu nhiên Hellboy (2004) và phần tiếp theo Hellboy II: The Golden Army (2008) và phim khoa học viễn tưởng quái vật Siêu đại chiến (2014).\n            Bộ phim kỳ ảo của ông năm 2017 Người đẹp và thủy quái đã nhận được đón nhận phê bình tích cực và giành giải Sư tử vàng tại liên hoan phim quốc tế Venice lần thứ 74 cũng như giải Oscar cho phim hay nhất. Bộ phim cũng giúp del Toro đoạt giải Oscar cho đạo diễn xuất sắc nhất, Quả cầu vàng, giải BAFTA và giải BFCA.', '0', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `epision`
--

CREATE TABLE `epision` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ep_number` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_backup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_release` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imdb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallpaper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_youtube` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dir_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`id`, `title`, `slug`, `content`, `year_release`, `imdb`, `time`, `view`, `poster`, `wallpaper`, `link`, `link_youtube`, `dir_id`, `created_at`, `updated_at`) VALUES
(1, 'Tenet', 'tenet', 'Phim theo chân một tổ chức gián điệp bí ẩn có khả năng thao túng và nghịch đảo thời gian, thực thi sứ mệnh ngăn chặn Thế chiến thứ III từ trước khi nó xảy ra.', '2020', '7,5', 150, 0, 'p1.jpeg', 'w1.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K3tgQ_3f3HM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, '2021-01-20 05:19:05'),
(2, 'NỮ THẦN CHIẾN BINH 2: NỮ THẦN CHIẾN BINH 1984', 'nu-than-chien-binh-2-nu-than-chien-binh-1984', 'Wonder Woman 1984 sẽ lấy bối cảnh năm 1984, khi Mỹ và Liên Xô đối đầu trong thời kỳ Chiến tranh Lạnh. Đặc biệt cũng hé lộ sự trở lại bí ẩn của Steve Trevor – người đã hy sinh anh dũng nhằm ngăn chặn kế hoạch phát tán chất độc của Đức quốc xã.\n            ', '2020', '5,4', 151, 0, 'p2.jpg', 'w2.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9ihTMGouLms\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 2, NULL, NULL),
(3, 'SpongeBob', 'spongebob', 'SpongeBob SquarePants, chú bọt biển hài hước cùng người bạn thân nhất của anh - Patrick Star và phần còn lại của băng đảng từ thị trấn Bikini Bottom đã xuất hiện trên màn ảnh rộng trong bộ phim hoạt hình bằng CGI đầu tiên. Sau khi chú ốc sên yêu quý của SpongeBob, Gary bị bắt sên, cậu và Patrick bắt đầu một cuộc phiêu lưu hoành tráng đến The Lost City của Atlantic để đưa Gary về nhà. Hai người bạn đã cùng nhau dấn thân vào 1 hành trình nguy hiểm và đầy những tình huống oái ăm, SpongeBob và những người bạn của mình đã chứng minh rằng: Không có gì mạnh hơn sức mạnh của tình bạn. Phim dự kiến khởi chiếu tại các rạp CGV trên toàn quốc từ 12.06.2020.\n            ', '2020', '6,0', 90, 0, 'p3.jpg', 'w3.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gaSidGcjw_A\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 3, NULL, NULL),
(4, 'THẾ CHIẾN 1917', 'the-chien-1917', '1917 là một bộ phim chiến tranh sử thi của đạo diễn Sam Mendes và đồng biên kịch bởi Mendes và Krysty Wilson-Cairns. Bộ phim được dựa trên một câu chuyện do ông nội Alfred Mendes kể cho cháu Sam Mendes, và kể lại câu chuyện về hai người lính trẻ Anh ở đỉnh điểm của Thế chiến 1 trong Mùa xuân năm 1917, được giao nhiệm vụ đưa ra một thông điệp cảnh báo về một cuộc phục kích trong một trong những cuộc giao tranh ngay sau khi quân Đức rút về Phòng tuyến Hindenburg trong Chiến dịch Alberich.\n            ', '2020', '8,3', 119, 0, 'p4.jpg', 'w4.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UcmZN0Mbl04\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 4, NULL, NULL),
(5, 'Joker (2019)', 'joker-2019', 'JOKER từ lâu đã là siêu ác nhân huyền thoại của điện ảnh thế giới. Nhưng có bao giờ bạn tự hỏi, Joker đến từ đâu và điều gì đã biến Joker trở thành biểu tượng tội lỗi của thành phố Gotham? JOKER sẽ là cái nhìn độc đáo về tên ác nhân khét tiếng của Vũ trụ DC – một câu chuyện gốc thấm nhuần, nhưng tách biệt rõ ràng với những truyền thuyết quen thuộc xoay quanh nhân vật mang đầy tính biểu tượng này.\n            ', '2019', '8,6', 122, 0, 'p5.jpg', 'w5.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/K1-11dWJocM\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 5, NULL, NULL),
(6, 'Frozen (2013)', 'frozen-2013', 'Có thể nhiều người sẽ ao ước sở hữu phép thuật, song đó chắc chắn không phải nàng công chúa Elsa. Ngay từ nhỏ, cô đã có khả năng kỳ diệu là tạo ra băng tuyết cũng như điều khiển những con gió.\n\n            Nhưng chính khả năng ấy đã vô tình gây thương tích cho em gái Anna. Anna được các quỷ lùn chữa trị và cái giá phải trả là cô bé hoàn toàn quên mất việc chị mình có năng lực đặc biệt. Không những thế, đức vua và hoàng hậu còn phải cách ly Elsa trong căn phòng kín để phép thuật của cô không phát tác, khiến tuổi thơ hai chị em Elsa và Anna bị tách rời.', '2013', '7,5', 102, 0, 'p6.jpg', 'w6.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WLw9cPUkltc\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 6, NULL, NULL),
(7, 'It Chapter Two (2019)', 'it-chapter-two-2019', 'It Chapter Two (Gã Hề Ma Quái 2) vẫn là câu chuyện về những cô cậu bé của nhóm The Losers Club, lúc này đã trưởng thành và đối mặt với vô số vấn đề trong cuộc sống. Chưa dừng lại ở đó, ám ảnh ma hề Pennywise cứ 27 năm lại xuất hiện một lần tại thị trấn Derry buộc 7 cô cậu bé ngày nào phải tiếp tục cuốn vào cuộc chạm trán tiếp theo giữa hai bên thiện và ác.\n\n            Mặc dù có thể cả nhóm đã trưởng thành và khôn ngoan hơn, cuộc chiến của họ với Pennywise vẫn còn đó những hậu quả bất ngờ, thậm chí khiến một số thành viên phải trải qua đau đớn đến tột cùng.', '2019', '6,9', 169, 0, 'p7.jpg', 'w7.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qblBGRBtmU0\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 7, NULL, NULL),
(8, 'Doraemon: Nobitas Chronicle Of The Moon Exploration (2019)', 'doraemon-nobitas-chronicle-of-the-moon-exploration-2019', 'Trong \"Doraemon: Nobita và Chuyến Thám Hiểm Mặt Trăng\", Nobita ở trường tuyên bố với mọi người rằng \"có con thỏ trên Mặt Trăng\", cậu đã bị mọi người chê cười và Doraemon lấy ra huy hiệu \"Thành viên Câu lạc bộ dị thuyết\" tạo ra vương quốc Thỏ trên Mặt Trăng. Một ngày nọ có một cậu bé chuyển trường đến lớp Nobita học. Nhóm Nobita đã cùng với cậu bé đã có chuyến phiêu lưu đến vương quốc Thỏ.\n\n            Trong đêm có một cô gái kì lạ xuất hiện là Lunna và cuộc hành trình đầy gam go và khó khăn của nhóm Nobita trên con đường khám phá mặt trăng cũng như chống lại ác nhân Diabolo cùng tên hầu cận gian manh Goddard.', '2019', '6,8', 110, 0, 'p8.jpg', 'w8.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/O61aTrlHJRA\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 8, NULL, NULL),
(9, 'Us (2019)', 'us-2019', 'Us, một tác phẩm đến từ hãng phim Monkeypaw, lấy bối cảnh tại một bờ biển mang tính biểu tượng phía Bắc California trong thời điểm hiện tại, người đã trở lại căn nhà bên bờ biển mà cô sống thời ấu thơ cùng người chồng Gabe và hai người con trong kì nghỉ hè. Bị ám ảnh bởi một chấn thương không thể giải thích trong quá khứ, kết hợp với một chuỗi các sự việc trùng hợp kỳ lạ, Adelaide cảm thấy sự hoang tưởng của bản thân đang tăng ở mức cảnh giác cao độ khi cô ngày càng chắc chắn rằng một điều gì đó tồi tệ sẽ xảy đến với gia đình mình.\n\n            Sau một ngày vui chơi trên biển cùng một gia đình khác, nhà Tylers , Adelaide và gia đình cô chở về ngôi nhà của mình. Khi màn đêm buông xuống, nhà Wilsons bỗng thấy bóng của một gia đình 4 người đang nắm tay nhau đứng trên đường cao tốc. Us đẩy một gia đình Mỹ phải chống lại một đối thủ ghê rợn và kỳ lạ: những bản sao thực thể ma quái của chính họ.', '2019', '7,3', 116, 0, 'p9.jpg', 'w9.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oLTJQSAJx6A\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 9, NULL, NULL),
(10, 'John Wick (2014)', 'john-wick-2014', 'Sau cái chết bất ngờ của người vợ, John Wick (Reeves) nhận được món quà cuối cùng từ cô ấy, một chú chó nhỏ giống beagle tên Daisy, và một lời nhắn \"Xin anh đừng quên cách yêu thương\". Nhưng cuộc sống của John lại bị quấy rối khi chiếc Boss Mustang 1969 lọt vào tầm ngắm của tên mafia Nga Iosef Tarasov (Alfie Allen).\n            ', '2014', '7,4', 96, 0, 'p10.jpg', 'w10.jpg', 'xxxxxxxxxxxxxxx', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/HEMAtgEojgk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film_actor`
--

CREATE TABLE `film_actor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film_genres`
--

CREATE TABLE `film_genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `genres_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `film_genres`
--

INSERT INTO `film_genres` (`id`, `film_id`, `genres_id`) VALUES
(1, 1, 4),
(2, 1, 6),
(3, 1, 10),
(10, 1, 4),
(11, 1, 6),
(12, 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `active`) VALUES
(1, 'Giả tưởng', 'gia-tuong', '1'),
(2, 'Chiến tranh', 'chien-tranh', '1'),
(3, 'Lịch sử', 'lich-su', '1'),
(4, 'Tâm lý', 'tam-ly', '1'),
(5, 'Hành động', 'hanh-dong', '1'),
(6, 'Viễn tưởng', 'vien-tuong', '1'),
(7, 'Giật gân', 'giat-gan', '1'),
(8, 'Phiêu lưu', 'phieu-luu', '1'),
(9, 'Huyền bí', 'huyen-bi', '1'),
(10, 'Khoa học', 'khoa-hoc', '1'),
(11, 'Hoạt hình', 'hoat-hinh', '1'),
(12, 'Kinh dị', 'kinh-di', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_15_113647_create_genres_table', 1),
(5, '2021_01_15_114420_create_director_table', 1),
(6, '2021_01_15_114710_create_actor_table', 1),
(7, '2021_01_15_122152_create_epision_table', 1),
(8, '2021_01_16_064729_create_film_table', 1),
(9, '2021_01_16_065452_create_film_genres_table', 1),
(10, '2021_01_16_070211_create_user_rating_table', 1),
(11, '2021_01_16_070602_create_film_actor_table', 1),
(12, '2021_01_16_070847_create_seasion_table', 1),
(13, '2021_01_16_071037_create_seasion_film_table', 1),
(14, '2021_01_16_074204_create_option_table', 1),
(15, '2021_01_16_074319_create_user_option_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `option`
--

CREATE TABLE `option` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `limit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seasion`
--

CREATE TABLE `seasion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part` int(11) NOT NULL,
  `epision_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seasion_film`
--

CREATE TABLE `seasion_film` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `seasion_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_option`
--

CREATE TABLE `user_option` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_start` datetime NOT NULL,
  `day_end` datetime NOT NULL,
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_rating`
--

CREATE TABLE `user_rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_num` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actor_name_unique` (`name`);

--
-- Chỉ mục cho bảng `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `director_name_unique` (`name`);

--
-- Chỉ mục cho bảng `epision`
--
ALTER TABLE `epision`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_dir_id_foreign` (`dir_id`);

--
-- Chỉ mục cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_actor_film_id_foreign` (`film_id`),
  ADD KEY `film_actor_actor_id_foreign` (`actor_id`);

--
-- Chỉ mục cho bảng `film_genres`
--
ALTER TABLE `film_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_genres_film_id_foreign` (`film_id`),
  ADD KEY `film_genres_genres_id_foreign` (`genres_id`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genres_name_unique` (`name`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `seasion`
--
ALTER TABLE `seasion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seasion_epision_id_foreign` (`epision_id`);

--
-- Chỉ mục cho bảng `seasion_film`
--
ALTER TABLE `seasion_film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seasion_film_film_id_foreign` (`film_id`),
  ADD KEY `seasion_film_seasion_id_foreign` (`seasion_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_option`
--
ALTER TABLE `user_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_option_option_id_foreign` (`option_id`),
  ADD KEY `user_option_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `user_rating`
--
ALTER TABLE `user_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_rating_film_id_foreign` (`film_id`),
  ADD KEY `user_rating_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `actor`
--
ALTER TABLE `actor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `director`
--
ALTER TABLE `director`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `epision`
--
ALTER TABLE `epision`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `film_genres`
--
ALTER TABLE `film_genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `option`
--
ALTER TABLE `option`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `seasion`
--
ALTER TABLE `seasion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `seasion_film`
--
ALTER TABLE `seasion_film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_option`
--
ALTER TABLE `user_option`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user_rating`
--
ALTER TABLE `user_rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_dir_id_foreign` FOREIGN KEY (`dir_id`) REFERENCES `director` (`id`);

--
-- Các ràng buộc cho bảng `film_actor`
--
ALTER TABLE `film_actor`
  ADD CONSTRAINT `film_actor_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `film_actor_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`);

--
-- Các ràng buộc cho bảng `film_genres`
--
ALTER TABLE `film_genres`
  ADD CONSTRAINT `film_genres_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `film_genres_genres_id_foreign` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`);

--
-- Các ràng buộc cho bảng `seasion`
--
ALTER TABLE `seasion`
  ADD CONSTRAINT `seasion_epision_id_foreign` FOREIGN KEY (`epision_id`) REFERENCES `epision` (`id`);

--
-- Các ràng buộc cho bảng `seasion_film`
--
ALTER TABLE `seasion_film`
  ADD CONSTRAINT `seasion_film_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `seasion_film_seasion_id_foreign` FOREIGN KEY (`seasion_id`) REFERENCES `seasion` (`id`);

--
-- Các ràng buộc cho bảng `user_option`
--
ALTER TABLE `user_option`
  ADD CONSTRAINT `user_option_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`),
  ADD CONSTRAINT `user_option_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `user_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
