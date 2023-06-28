@component('mail::message')
# Liên hệ mới

**Họ và tên:** {{ $data['name'] }}<br>
**Email:** {{ $data['email'] }}<br>
**Số điện thoại:** {{ $data['phonenumber'] }}<br>
**Địa chỉ:** {{ $data['address'] }}<br>
**Nội dung:**<br>
{{ $data['message'] }}
@endcomponent
