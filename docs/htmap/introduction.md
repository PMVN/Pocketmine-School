---
id: introduction
title: Giới Thiệu
sidebar_label: Giới Thiệu
---
___
:::caution Chú Ý
Phiên bản hiện tại mà trang hướng dẫn này đang đề cập tới là **PHP** `8.0` và **PocketMine-MP** `4.0`. Những phiên bản cũ hơn sẽ không được đề cập và có thể không tương thích với bài viết được viết ở đây.
Tất cả các bài viết sẽ được cập nhật liên tục sao cho thích ứng với phiên bản **PHP** hỗ trợ phiên bản **PocketMine-MP** mới nhất.
:::
## PocketMine Plugin Là Cái Gì?

Plugin là một mô-đun bên ngoài có thể được thêm vào máy chủ của bạn để thêm các tính năng tùy chỉnh, thay đổi các hành vi mặc định và hơn thế nữa. PocketMine-MP hỗ trợ các plugin để tùy chỉnh và/hoặc sửa đổi máy chủ PocketMine-MP của bạn để có trải nghiệm và tùy chỉnh tốt hơn. Các plugin cho phép chủ sở hữu máy chủ có thể thực thi các nhiệm vụ hoặc hành vi nhất định trong máy chủ của họ mà không được thực hiện trong PocketMine-MP chính thức. Có rất nhiều plugin thú vị và hữu ích còn được duy trì và lưu trữ, chẳng hạn như chỉnh sửa thế giới, khởi động lại tự động và hệ thống tiền tệ.

## Bạn Sẽ Được Học Những Gì

- Cấu trúc của một plugin
- Kê khai `plugin.yml`
- Giới thiệu về API
- Class Main cơ bản
- Thêm lệnh và quyền hạn
- Xử lý sự kiện
- Cài đặt cho người dùng bằng tệp cấu hình
- Thực thi Task

## Trước Khi Bắt Đầu

Trang hướng dẫn này yêu cầu bạn cần có nhưng điều sau:

1. Bạn phải có kiến thức về máy tính và điều máy chủ PocketMine-MP.
2. **Bạn phải có kiến thức về ngôn ngữ PHP (đặc biệt là Lập Trình Hướng Đối Tượng).**
3. Bạn cần có một máy chủ PocketMine-MP hoạt động được và vào được.
4. Bạn cần có plugin DevTools được cài vào máy chủ của bạn.
5. You should have the DevTools plugin installed in your server.
   - Nếu bạn không có, bạn có thể tải DevTools qua [Poggit](https://poggit.pmmp.io/p/DevTools).

Nếu bạn là người dùng từ phiên bản API 3, chúng tôi sẽ giúp đỡ bạn làm quen với phiên bản API 4.

Tuy chúng tôi đang hướng đến người dùng máy tính, nhưng người dùng điện thoại vẫn có thể tham khảo.

Nhấn nút "Next" để bắt đầu bài học một khi bạn đã sẵn sàng!

___
Cảm ơn vì các bài viết mẫu được viết bởi [PocketMine-School](https://github.com/PocketMine-School). Tất cả sẽ được dịch sang tiếng Việt và thêm một vài chỉ dẫn nữa của chúng tôi.
___