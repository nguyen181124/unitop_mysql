<?php
#Danh mục
$list_product_cart = [
    1 => [
        'id' => 1,
        'cat_title' => "Điện thoại",
    ],

    2 => [
        'id' => 2,
        'cat_title' => "Macbook",
    ],

    3 => [
        'id' => 3,
        'cat_title' => "Laptop",
    ],
];

#Dữ liệu sản phẩm

$list_product = [
    1 => [
        'id' => 1,
        'product_title' => "iPhone 15 Pro Max 256GB",
        'price' => 29590000,
        'code' => "UNI#1",
        'product_desc' => "iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-black-1-1.jpg",
        'product_content' => "<p>Sản phẩm chính hãng, đảm bảo chất lượng: Thế Giới Di Động là nhà bán lẻ điện thoại di động lớn nhất Việt Nam, cam kết cung cấp sản phẩm chính hãng, đảm bảo chất lượng. Bạn có thể yên tâm về xuất xứ sản phẩm và có thể tận hưởng trải nghiệm sử dụng tốt nhất.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-black-1-1.jpg'</p>",
        'cat_id' => 1,
    ],

    2 => [
        'id' => 2,
        'product_title' => "Samsung Galaxy S23 Ultra 5G 256GB",
        'price' => 21990000,
        'code' => "UNI#2",
        'product_desc' => "Samsung Galaxy S23 Ultra 5G 256GB là chiếc smartphone cao cấp nhất của nhà Samsung, sở hữu cấu hình không tưởng với con chip khủng được Qualcomm tối ưu riêng cho dòng Galaxy và camera lên đến 200 MP, xứng danh là chiếc flagship Android được mong đợi nhất trong năm 2023.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-xanh-1.jpg",
        'product_content' => "<p>Galaxy S23 Ultra đã gây ấn tượng mạnh mẽ khi ra mắt với thiết kế đột phá và hiệu suất vượt trội. Vào cuối tháng 3 năm 2024, Samsung đã giới thiệu One UI 6.1, đưa vào Galaxy S23 Ultra các tính năng AI tiên tiến từ dòng Galaxy S24 trước đó. </p><p><img src='https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-xanh-1.jpg'</p>",
        'cat_id' => "1",
    ],

    3 => [
        'id' => 3,
        'product_title' => "OPPO Reno11 F 5G Tím",
        'price' => 8990000,
        'code' => "UNI#3",
        'product_desc' => "OPPO Reno11 F 5G là một chiếc điện thoại tầm trung mới được OPPO ra mắt trong thời gian gần đây. Máy sở hữu nhiều ưu điểm nổi bật như thiết kế trẻ trung, màn hình đẹp, hiệu năng mạnh mẽ nhờ chip Dimensity 7050 5G, hứa hẹn mang đến trải nghiệm tốt khi sử dụng.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/42/321895/oppo-reno-11f-tim-1.jpg",
        'product_content' => "<p>GThiết kế của điện thoại này được tạo hình vuông vức hiện đại, đem đến một vẻ đẹp đầy trẻ trung và cá tính. Điều đặc biệt là phiên bản màu tím của Reno11 F 5G đã gây ấn tượng mạnh mẽ với các tín đồ công nghệ, lấy cảm hứng từ những kết cấu kim cương, nó tạo nên hiệu ứng lấp lánh trên bề mặt lưng cực kỳ thú vị.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/321895/oppo-reno-11f-tim-1.jpg'</p>",
        'cat_id' => "1",
    ],

    4 => [
        'id' => 4,
        'product_title' => "MacBook Air 13 inch M3 8GB/256GB (MRXV3SA/A)",
        'price' => 27290000,
        'code' => "UNI#4",
        'product_desc' => "Tiếp nối những thành công mạnh mẽ từ phiên bản Macbook Air M2, thì nay MacBook Air M3 đã quay lại thật bùng nổ vào những tháng đầu 2024 này. Với con chip M3 cải tiến tuyệt vời, ngoại hình đến tiện ích miễn chê sẽ cho bạn trải nghiệm những chế độ công việc tuyệt vời.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/44/322612/macbook-air-13-inch-m3-2024-1-3.jpg",
        'product_content' => "<p>Macbook Air sử dụng con chip Apple M3 với 8 nhân CPU được sản xuất dựa trên tiến trình 3 nm mới, mỏng nhẹ hoàn toàn nhưng lại sở hữu mức hiệu năng theo hãng nhận định là vượt trội hơn hẳn các thế hệ trước, 1.6x lần nhanh hơn thế hệ M1 và vận dụng nhanh hơn đến 13x lần đối với thế hệ chip Intel.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/322612/macbook-air-13-inch-m3-2024-1-3.jpg'</p>",
        'cat_id' => "2",
    ],

    5 => [
        'id' => 5,
        'product_title' => "MacBook Air 13 inch M2 8GB/256GB (MLY13SA/A)",
        'price' => 24690000,
        'code' => "UNI#5",
        'product_desc' => "Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-01-2.jpg",
        'product_content' => "<p>Sự đẳng cấp đến từ ngoại hình của chiếc MacBook Air nhà Apple là điều không thể phủ nhận và khó có dòng sản phẩm cùng phân khúc nào có thể qua mặt được. Vẫn là lớp vỏ kim loại nguyên khối cứng cáp cùng các cạnh góc vuông vức, sang trọng nhưng chiếc MacBook Air 2022 năm nay đã thoát ra khỏi ngôn ngữ thiết kế nhẹ nhàng vốn có từ lâu và khoác lên diện mạo mới tương tự như “đàn anh” MacBook Pro.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-01-2.jpg'</p>",
        'cat_id' => "2",
    ],

    6 => [
        'id' => 6,
        'product_title' => "MacBook Air 15 inch M2 8GB/256GB Sạc 35W (MQKP3SA/A)",
        'price' => 27690000,
        'code' => "UNI#6",
        'product_desc' => "MacBook Air 15 inch M2 2023 đã có phiên bản cải tiến vừa được nhà Apple cho ra mắt, thêm không gian cho những điều bạn yêu với màn hình Liquid Retina 15 inch ấn tượng. Với người dùng yêu thích hiệu năng nhanh như chớp trong một thiết kế siêu gọn nhẹ của dòng Air thì đây chắc chắn là một sản phẩm bạn không nên bỏ qua.",
        'product_thumb' => "https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-m2-2023-16gb-silver-1.jpg",
        'product_content' => "<p>Với phiên bản 2023, Macbook Air được nâng cấp màn hình lên 15.3 inch, được trang bị tấm nền IPS cùng độ phân giải Liquid Retina (2880 x 1864) giúp những khung hình được tái hiện hoàn hảo, có độ sắc nét cao cùng không gian trải nghiệm nội dung rộng lớn. Độ phủ màu rộng P3 cùng mức hiển thị 1 tỷ màu hỗ trợ các tác vụ đồ họa với khả năng xuất hình ảnh chuẩn xác.</p><p><img src='https://cdn.tgdd.vn/Products/Images/44/309016/apple-macbook-air-m2-2023-16gb-silver-1.jpg'</p>",
        'cat_id' => "2",
    ],

    
];