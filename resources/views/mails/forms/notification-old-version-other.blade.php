<tbody>
    <tr style="border-collapse:collapse">
        <td style="padding:0;Margin:0;padding:20px;background-color:#f6f6f6">
            <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;float:left">
            <tbody>
                <tr style="border-collapse:collapse">
                    <td valign="top" style="padding:0;Margin:0;width:192px">
                        <table cellpadding="0" width="100%" style="border-collapse:collapse;border-spacing:0px">
                            <tbody>
                                <tr style="border-collapse:collapse">
                                    <td style="padding:0;Margin:0;">
                                        <img src="{{ $supplyCompany->logo_url }}" style="display:block;border:0;outline:none;text-decoration:none" width="192" height="61">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
            </table>
        </td>
    </tr>
    <tr style="border-collapse:collapse">
    <td style="padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px">
        <table width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px">
            <tbody>
            <tr style="border-collapse:collapse">
                <td valign="top" style="padding:0;Margin:0;width:560px">
                    <table cellspacing="0" cellpadding="0" style="border-collapse:collapse;border-spacing:0px">
                        <tbody>
                            <div>
                                <h2> {{ $supplyCompany->name }} thông báo về tình trạng chứng thư số kê khai thuế/BHXB/Hải quan của quý công ty : {{ $customer->company }}</h2>
                                <p>Con dấu điện tử <b>(Tài khoản khai thuế -  {{ $customer->tax_code }} -  {{ $customer->company }} )</b> sắp hết hiệu lực kê khai và thuộc Usb phiên bản cũ Version 4.0 không tương thích với đường truyền.</p>
                                <p>Trong quá trình rà soát của chúng tôi phát hiện token của doanh nghiệp nằm trong diện đang sử dụng token cũ từ năm 2015, 2016, 2017, 2018, 2019. Không tương thích với đường truyền version 6.0 vào thời điểm kê khai sắp tới, cần được thực hiện nâng cấp hoặc thay thế bằng token đạt chuẩn năm 2021.</p>
                                <p>Vì vậy <b>{{ $customer->company }}</b> liên hệ với chúng tôi để tiến hành nâng cấp kể từ khi nhận được thông báo, nếu không xử lý token thuế sẽ bị thu hồi, Không ký và lưu được dữ liệu trang thuế. Chúng tôi sẽ không chịu trách nhiệm.</p>
                            </div>
                            <tr>
                                <td>
                                    <b>Thông tin phí nâng cấp và gia hạn USB Token :</b>
                                    <ul>
                                        <li style="font-size:13px;font-family:arial;line-height:18px;Margin-bottom:15px;color:#282828"><strong><a href=""> Gói 1 năm: (1,100,000) Một triệu một trăm nghìn đồng. </a></strong></li>
                                        <li style="font-size:13px;font-family:arial;line-height:18px;Margin-bottom:15px;color:#282828"><strong><a href=""> Gói 2 năm: (1,800,000) Một triệu tám trăm nghìn đồng. </a></strong></li>
                                        <li style="font-size:13px;font-family:arial;line-height:18px;Margin-bottom:15px;color:#282828"><strong><a href=""> Gói 3 năm: (2.100.000) Hai triệu một trăm nghìn đồng. </a></strong></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <b>Note:</b> (TB gửi đến các đơn vị hết hạn và còn hạn dưới 6 tháng nếu doanh nghiệp còn hạn vẫn được cộng dồn vào lần gia hạn này)<br>
            </tbody>
        </table>
    </td>
    </tr>
    <div style="padding:0;Margin:0;padding-left:20px;padding-right:20px">
        <p>
            <b>Lưu ý:</b> Công Ty đã đăng kí gia hạn hoặc không muốn nâng cấp vui lòng phản hồi lại thông tin vào email này để tránh nhận email vào lần sau.<br>
        </p>
    </div>
    <tr style="border-collapse:collapse">
        <td  style="padding:20px;background-color:#f6f6f6">
        <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;float:left">
            <tbody>
                <tr style="border-collapse:collapse">
                    <td  style="padding:0;Margin:0;">
                        <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px">
                            <tbody>
                                <tr style="border-collapse:collapse">
                                    <td  style="padding:0;Margin:0">
                                        <p style="Margin:0;font-size:10px;font-family:arial;line-height:15px;color:#333333">
                                            <strong>TRUNG TÂM KINH DOANH  DỊCH VỤ CHỮ KÝ SỐ DOANH NGHIỆP</strong>
                                            <br>Tòa nhà RICE City<br>Tây nam Linh Đàm, Hoàng Mai, Hà Nội<br>
                                            <a href="mailto:h91anoi@vnpt-kysodientu.com" target="_blank">hanoi@vnpt-kysodientu.com</a> - 0968.95.91.91/0838.95.91.
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        </td>
    </tr>
</tbody>
