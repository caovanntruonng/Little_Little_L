@component('mail::message')
# Đơn đặt vé của bạn

**Họ và tên:** {{ $order['contact_info'] }}<br>
**Số lượng:** {{ $order['quantity'] }}<br>
**Đơn giá:** {{ number_format($order['amount'], 0, ',', '.') . ' VND'}}<br>
**Ngày sử dụng:** {{ $order['usage_date'] }}<br>
**Số điện thoại:** {{ $order['phone'] }}<br>
**Email:** {{ $order['email'] }}<br>
**Mã vé:**<br>
{{ $order['ticket_code'] }}
@endcomponent
