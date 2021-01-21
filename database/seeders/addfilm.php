<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class addfilm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film')->insert([
            ['title' => 'Tenet', 'slug' => Str::slug('Tenet', '-'), 'content' => 'Phim theo chân một tổ chức gián điệp bí ẩn có khả năng thao túng và nghịch đảo thời gian, thực thi sứ mệnh ngăn chặn Thế chiến thứ III từ trước khi nó xảy ra.', 'year_release' => '2020', 'imdb' => '7,5', 'time' => '150',
                'poster'=> 'p1.jpeg', 'wallpaper' => 'w1.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/K3tgQ_3f3HM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '1'
            ],
            ['title' => 'NỮ THẦN CHIẾN BINH 2: NỮ THẦN CHIẾN BINH 1984', 'slug' => Str::slug('NỮ THẦN CHIẾN BINH 2: NỮ THẦN CHIẾN BINH 1984', '-'), 'content' => 'Wonder Woman 1984 sẽ lấy bối cảnh năm 1984, khi Mỹ và Liên Xô đối đầu trong thời kỳ Chiến tranh Lạnh. Đặc biệt cũng hé lộ sự trở lại bí ẩn của Steve Trevor – người đã hy sinh anh dũng nhằm ngăn chặn kế hoạch phát tán chất độc của Đức quốc xã.
            ', 'year_release' => '2020', 'imdb' => '5,4', 'time' => '151',
                'poster'=> 'p2.jpg', 'wallpaper' => 'w2.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/9ihTMGouLms" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '2'
            ],
            ['title' => 'SpongeBob', 'slug' => Str::slug('SpongeBob', '-'), 'content' => 'SpongeBob SquarePants, chú bọt biển hài hước cùng người bạn thân nhất của anh - Patrick Star và phần còn lại của băng đảng từ thị trấn Bikini Bottom đã xuất hiện trên màn ảnh rộng trong bộ phim hoạt hình bằng CGI đầu tiên. Sau khi chú ốc sên yêu quý của SpongeBob, Gary bị bắt sên, cậu và Patrick bắt đầu một cuộc phiêu lưu hoành tráng đến The Lost City của Atlantic để đưa Gary về nhà. Hai người bạn đã cùng nhau dấn thân vào 1 hành trình nguy hiểm và đầy những tình huống oái ăm, SpongeBob và những người bạn của mình đã chứng minh rằng: Không có gì mạnh hơn sức mạnh của tình bạn. Phim dự kiến khởi chiếu tại các rạp CGV trên toàn quốc từ 12.06.2020.
            ', 'year_release' => '2020', 'imdb' => '6,0', 'time' => '90',
                'poster'=> 'p3.jpg', 'wallpaper' => 'w3.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/gaSidGcjw_A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '3'
            ],
            ['title' => 'THẾ CHIẾN 1917', 'slug' => Str::slug('THẾ CHIẾN 1917', '-'), 'content' => '1917 là một bộ phim chiến tranh sử thi của đạo diễn Sam Mendes và đồng biên kịch bởi Mendes và Krysty Wilson-Cairns. Bộ phim được dựa trên một câu chuyện do ông nội Alfred Mendes kể cho cháu Sam Mendes, và kể lại câu chuyện về hai người lính trẻ Anh ở đỉnh điểm của Thế chiến 1 trong Mùa xuân năm 1917, được giao nhiệm vụ đưa ra một thông điệp cảnh báo về một cuộc phục kích trong một trong những cuộc giao tranh ngay sau khi quân Đức rút về Phòng tuyến Hindenburg trong Chiến dịch Alberich.
            ', 'year_release' => '2020', 'imdb' => '8,3', 'time' => '119',
                'poster'=> 'p4.jpg', 'wallpaper' => 'w4.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/UcmZN0Mbl04" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '4'
            ],
            ['title' => 'Joker (2019)', 'slug' => Str::slug('Joker (2019)', '-'), 'content' => 'JOKER từ lâu đã là siêu ác nhân huyền thoại của điện ảnh thế giới. Nhưng có bao giờ bạn tự hỏi, Joker đến từ đâu và điều gì đã biến Joker trở thành biểu tượng tội lỗi của thành phố Gotham? JOKER sẽ là cái nhìn độc đáo về tên ác nhân khét tiếng của Vũ trụ DC – một câu chuyện gốc thấm nhuần, nhưng tách biệt rõ ràng với những truyền thuyết quen thuộc xoay quanh nhân vật mang đầy tính biểu tượng này.
            ', 'year_release' => '2019', 'imdb' => '8,6', 'time' => '122',
                'poster'=> 'p5.jpg', 'wallpaper' => 'w5.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/K1-11dWJocM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '5'
            ],
            ['title' => 'Frozen (2013)', 'slug' => Str::slug('Frozen (2013)', '-'), 'content' => 'Có thể nhiều người sẽ ao ước sở hữu phép thuật, song đó chắc chắn không phải nàng công chúa Elsa. Ngay từ nhỏ, cô đã có khả năng kỳ diệu là tạo ra băng tuyết cũng như điều khiển những con gió.

            Nhưng chính khả năng ấy đã vô tình gây thương tích cho em gái Anna. Anna được các quỷ lùn chữa trị và cái giá phải trả là cô bé hoàn toàn quên mất việc chị mình có năng lực đặc biệt. Không những thế, đức vua và hoàng hậu còn phải cách ly Elsa trong căn phòng kín để phép thuật của cô không phát tác, khiến tuổi thơ hai chị em Elsa và Anna bị tách rời.', 'year_release' => '2013', 'imdb' => '7,5', 'time' => '102',
                'poster'=> 'p6.jpg', 'wallpaper' => 'w6.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/WLw9cPUkltc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '6'
            ],
            ['title' => 'It Chapter Two (2019)', 'slug' => Str::slug('It Chapter Two (2019)', '-'), 'content' => 'It Chapter Two (Gã Hề Ma Quái 2) vẫn là câu chuyện về những cô cậu bé của nhóm The Losers Club, lúc này đã trưởng thành và đối mặt với vô số vấn đề trong cuộc sống. Chưa dừng lại ở đó, ám ảnh ma hề Pennywise cứ 27 năm lại xuất hiện một lần tại thị trấn Derry buộc 7 cô cậu bé ngày nào phải tiếp tục cuốn vào cuộc chạm trán tiếp theo giữa hai bên thiện và ác.

            Mặc dù có thể cả nhóm đã trưởng thành và khôn ngoan hơn, cuộc chiến của họ với Pennywise vẫn còn đó những hậu quả bất ngờ, thậm chí khiến một số thành viên phải trải qua đau đớn đến tột cùng.', 'year_release' => '2019', 'imdb' => '6,9', 'time' => '169',
                'poster'=> 'p7.jpg', 'wallpaper' => 'w7.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/qblBGRBtmU0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '7'
            ],
            ['title' => 'Doraemon: Nobitas Chronicle Of The Moon Exploration (2019)', 'slug' => Str::slug('Doraemon: Nobitas Chronicle Of The Moon Exploration (2019)', '-'), 'content' => 'Trong "Doraemon: Nobita và Chuyến Thám Hiểm Mặt Trăng", Nobita ở trường tuyên bố với mọi người rằng "có con thỏ trên Mặt Trăng", cậu đã bị mọi người chê cười và Doraemon lấy ra huy hiệu "Thành viên Câu lạc bộ dị thuyết" tạo ra vương quốc Thỏ trên Mặt Trăng. Một ngày nọ có một cậu bé chuyển trường đến lớp Nobita học. Nhóm Nobita đã cùng với cậu bé đã có chuyến phiêu lưu đến vương quốc Thỏ.

            Trong đêm có một cô gái kì lạ xuất hiện là Lunna và cuộc hành trình đầy gam go và khó khăn của nhóm Nobita trên con đường khám phá mặt trăng cũng như chống lại ác nhân Diabolo cùng tên hầu cận gian manh Goddard.', 'year_release' => '2019', 'imdb' => '6,8', 'time' => '110',
                'poster'=> 'p8.jpg', 'wallpaper' => 'w8.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/O61aTrlHJRA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '8'
            ],
            ['title' => 'Us (2019)', 'slug' => Str::slug('Us (2019)', '-'), 'content' => 'Us, một tác phẩm đến từ hãng phim Monkeypaw, lấy bối cảnh tại một bờ biển mang tính biểu tượng phía Bắc California trong thời điểm hiện tại, người đã trở lại căn nhà bên bờ biển mà cô sống thời ấu thơ cùng người chồng Gabe và hai người con trong kì nghỉ hè. Bị ám ảnh bởi một chấn thương không thể giải thích trong quá khứ, kết hợp với một chuỗi các sự việc trùng hợp kỳ lạ, Adelaide cảm thấy sự hoang tưởng của bản thân đang tăng ở mức cảnh giác cao độ khi cô ngày càng chắc chắn rằng một điều gì đó tồi tệ sẽ xảy đến với gia đình mình.

            Sau một ngày vui chơi trên biển cùng một gia đình khác, nhà Tylers , Adelaide và gia đình cô chở về ngôi nhà của mình. Khi màn đêm buông xuống, nhà Wilsons bỗng thấy bóng của một gia đình 4 người đang nắm tay nhau đứng trên đường cao tốc. Us đẩy một gia đình Mỹ phải chống lại một đối thủ ghê rợn và kỳ lạ: những bản sao thực thể ma quái của chính họ.', 'year_release' => '2019', 'imdb' => '7,3', 'time' => '116',
                'poster'=> 'p9.jpg', 'wallpaper' => 'w9.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/oLTJQSAJx6A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '9'
            ],
            ['title' => 'John Wick (2014)', 'slug' => Str::slug('John Wick (2014)', '-'), 'content' => 'Sau cái chết bất ngờ của người vợ, John Wick (Reeves) nhận được món quà cuối cùng từ cô ấy, một chú chó nhỏ giống beagle tên Daisy, và một lời nhắn "Xin anh đừng quên cách yêu thương". Nhưng cuộc sống của John lại bị quấy rối khi chiếc Boss Mustang 1969 lọt vào tầm ngắm của tên mafia Nga Iosef Tarasov (Alfie Allen).
            ', 'year_release' => '2014', 'imdb' => '7,4', 'time' => '96',
                'poster'=> 'p10.jpg', 'wallpaper' => 'w10.jpg', 'link' => 'xxxxxxxxxxxxxxx', 'link_youtube' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/HEMAtgEojgk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' , 'dir_id' => '10'
            ],
        ]);
    }
}
