<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tintuc extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tintucs')->insert([
            [
                'id' => 1,
                'title' => 'Lịch sử San Francisco - thành phố vàng của xứ sở cờ hoa',
                'slug' => 'lich-su-san-francisco-thanh-pho-vang-cua-xu-so-co-hoa',
                'tomtat' => 'Kể từ khi bang California trở thành một phần của nước Mỹ vào năm 1850, thành phố San Francisco đã bước lên làm viên ngọc quý của bờ biển phía Tây',
                'noidung' => '<div class="detail__content" style="line-height: 1.7; max-width: 640px; margin-left: auto; margin-right: auto;"><p style="margin-right: 0px; margin-left: 0px;">Kể từ khi bang California trở thành một phần của nước Mỹ vào năm 1850, thành phố San Francisco đã bước lên làm viên ngọc quý của bờ biển phía Tây. Những ngọn đồi dốc, những công viên tráng lệ cùng tầm nhìn toàn cảnh tuyệt đẹp không chỉ khiến San Francisco trở thành một trong những điểm du lịch hàng đầu trên thế giới, mà còn là một thỏi nam châm thu hút hàng triệu những người đầy mơ ước, hối hả và những nhà đổi mới không sợ hãi, những người đã đưa ra một số các phong trào xã hội, công nghệ và nghệ thuật với tầm nhìn xa của thế kỷ trước.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/1.jpg" alt="Toàn cảnh thành phố San Francisco. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/1.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/1.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/1.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Toàn cảnh thành phố San Francisco. Ảnh: The Guardian.</figcaption></figure><p style="margin-right: 0px; margin-left: 0px;">Những năm 20 đầy tiếng tăm ‘ầm ĩ’ về một mặt nào đó đã mang lại lợi ích cho San Francisco. Khi dân số của thành phố này vượt qua cột mốc nửa triệu người, các khu dân cư tương đối chưa phát triển được thành lập ở một số quận phía tây như Sea Cliff, nơi có một số ngôi nhà sang trọng và đắt tiền bậc nhất khu Vùng Vịnh thực sự nhìn ra biển và vách đá.</p><p style="margin-right: 0px; margin-left: 0px;">Một số khu vực khác, như Fillmore và Western Addition, tự hào với sự tập trung đặc biệt mạnh mẽ của các dân tộc thiểu số, đặc biệt là người Mỹ gốc Nhật và (cho đến sau chiến tranh thế giới thứ hai) cộng đồng Do Thái lớn mạnh của Fillmore.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/2.jpg" alt="San Francisco những năm 20. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/2.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/2.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/2.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">San Francisco những năm 20. Ảnh: The Guardian.</figcaption></figure><p style="margin-right: 0px; margin-left: 0px;">Trong thời kỳ ‘Prohibition’ – thời điểm nước Mỹ ban hành luật cấm nấu và bán rượu (1920 – 1933), đường bờ biển của Vùng Vịnh trở thành con đường lợi ích làm giàu cho những kẻ buôn lậu, và theo một số ước tính, San Francisco là thành phố có rất nhiều quán bar và tiêu thụ nhiều rượu hơn bất kỳ thành phố nào khác.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/3.jpg" alt="San Francisco là thành phố có rất nhiều quán bar và tiêu thụ nhiều rượu hơn bất kỳ thành phố nào khác. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/3.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/3.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/3.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">San Francisco là thành phố có rất nhiều quán bar và tiêu thụ nhiều rượu hơn bất kỳ thành phố nào khác. Ảnh: The Guardian.</figcaption></figure><p style="margin-right: 0px; margin-left: 0px;">Sương mù thường bao phủ hoặc che khuất đường chân trời ở San Francisco. Với kiểu thời tiết ‘vi khí hậu’, điều này đồng nghĩa với việc thời tiết có thể sẽ nắng và ôn hòa ở quận Mission, nhưng lại gần như đóng băng và u ám với lớp sương mù dày đặc như mưa phùn ở nơi chỉ cách Vịnh gần một hoặc hai dặm.</p><p style="margin-right: 0px; margin-left: 0px;">Tuy nhiên, sương mù cuộn liên tục đảm bảo rằng thời tiết ở San Francisco hiếm khi bị nóng bức đến khó chịu. Với những ngày mà nhiệt độ xuống dưới mức đóng băng, khí hậu ôn hòa đã giúp khẳng định vị thế của San Francisco như một điểm đến lý tưởng của hàng triệu người đã đi qua thành phố kể từ khi được thành lập.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/4.jpg" alt="Sương mù được coi là một điểm nhấn ở San Francisco. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/4.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/4.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/4.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Sương mù được coi là một điểm nhấn ở San Francisco. Ảnh: The Guardian.</figcaption></figure><p style="margin-right: 0px; margin-left: 0px;">Với một số kinh nghiệm từ những năm làm thám tử Pinkerton, nhà văn Dashiell Hammett đã mang đến cho thành phố San Francisco vẻ đẹp quyến rũ trong các tiểu thuyết tội phạm nổi tiếng nhất của ông, đặc biệt là The Maltese Falcon. Đây được xem là một trong những bộ phim lấy bối cảnh ở San Francisco nổi tiếng nhất trên thế giới.</p><p style="margin-right: 0px; margin-left: 0px;">Mark Twain là nhà báo nổi tiếng nhất trong số các nhà báo đã trở thành một phần của cộng đồng báo chí đầu tiên tại San Francisco, mặc dù thời gian làm cư dân địa phương của Mark chỉ diễn ra trong vài năm từ những năm 1860, và ông chưa bao giờ thực sự viết hoặc từng nói ‘mùa đông lạnh nhất mà tôi từng trải qua là mùa hè ở San Francisco’.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/5.jpg" alt="Khu phố Tàu ở San Francisco. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/5.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/5.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/5.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Khu phố Tàu ở San Francisco. Ảnh: The Guardian.</figcaption></figure><p style="margin-right: 0px; margin-left: 0px;">Thời điểm hưng thịnh ở ‘thành phố vàng’ San Francisco đã bị gián đoạn bởi sự sụp đổ của thị trường chứng khoán năm 1929. Nhưng cuộc suy thoái sau đó vẫn không thể ngăn cản sự phát triển của thành phố, và trong thập kỷ tới, San Francisco sẽ thay đổi đường chân trời của mình bằng cách xây dựng công trình kiến trúc mang tính biểu tượng nhất trong lịch sử.</p><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/8.jpg" alt="Thành phố San Francisco những năm 80. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/8.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/8.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/8.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Thành phố San Francisco những năm 80. Ảnh: The Guardian.</figcaption></figure><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative; text-align: justify;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/9.jpg" alt="Thời điểm hưng thịnh ở ‘thành phố vàng’ San Francisco đã bị gián đoạn bởi sự sụp đổ của thị trường chứng khoán năm 1929. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/9.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/9.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/9.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Thời điểm hưng thịnh ở ‘thành phố vàng’ San Francisco đã bị gián đoạn bởi sự sụp đổ của thị trường chứng khoán năm 1929. Ảnh: The Guardian.</figcaption></figure><figure class="image-wrap align-center-image lightgallery" style="margin-right: -108px; margin-left: -108px; position: relative;"><img class="img-fluid" src="http://image.daidoanket.vn/w856/images/upload/maictv/05122022/10.jpg" alt="Thành phố San Francisco là viên ngọc quý của bờ biển phía tây từ năm 1850. Ảnh: The Guardian." data-original="http://image.daidoanket.vn/images/upload/maictv/05122022/10.jpg" data-zoom-src="http://image.daidoanket.vn/images/upload/maictv/05122022/10.jpg" data-zoomable="true" data-src="http://image.daidoanket.vn/images/upload/maictv/05122022/10.jpg" style="display: block; margin: auto;"><figcaption class="image-caption" style="width: 640px; max-width: 640px; margin: 0.5rem auto 0px;">Thành phố San Francisco là viên ngọc quý của bờ biển phía tây từ năm 1850. Ảnh: The Guardian.</figcaption></figure></div><footer class="detail__footer" style="margin: 1.5rem auto 0px;"><div class="detail__social" style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgb(233, 236, 239); display: flex; justify-content: flex-end;"><div class="linked-fb" style="margin-right: 0.5rem; align-self: center;"><div class="fb-like fb_iframe_widget" data-href="http://daidoanket.vn/lich-su-san-francisco--thanh-pho-vang-cua-xu-so-co-hoa-5686164.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=522012388627438&amp;container_width=0&amp;href=http%3A%2F%2Fdaidoanket.vn%2Flich-su-san-francisco--thanh-pho-vang-cua-xu-so-co-hoa-5686164.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small" style="display: inline-block; position: relative;"><span style="display: inline-block; position: relative; text-align: justify; vertical-align: bottom; width: 150px; height: 28px;"></span></div></div></div></footer>',
                'tacgia' => 3,
                'ngayguibai' => '2022-05-13',
                'ngayduyet' => '2022-05-13',
                'luotxem' => '8',
                'danhgia' => '0',
                'tag' => 'mỹ,thế giới,california,francisco,thành phố vàng của xứ sở cờ hoa,lịch sửa francisco',
                'hinhanh' => '1.jpg',
                'video' => '',
                'trangthai' => 1,
                'id_properticategory' => 9,
                'id_category' => 1,
                'created_at' => '2022-05-03 01:33:01',
                'updated_at' => '2022-05-19 06:01:29'
            ],
            [],
            [],
            [],
            [],
        ]);
    }
}
