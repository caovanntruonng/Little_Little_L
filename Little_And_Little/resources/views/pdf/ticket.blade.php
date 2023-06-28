<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: DejaVu SanS;
        }

        .container {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-label {
            font-weight: bold;
        }

        .ticket-codes {
            margin-top: 20px;
            font-size: 14px;
        }

        .ticket-code {
            margin-bottom: 5px;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Đơn đặt vé của bạn</h1>
        <div class="info-item">
            <span class="info-label">Họ và tên:</span> {{ $order['contact_info'] }}
        </div>
        <div class="info-item">
            <span class="info-label">Số lượng:</span> {{ $order['quantity'] }}
        </div>
        <div class="info-item">
            <span class="info-label">Đơn giá:</span> {{ number_format($order['amount'], 0, ',', '.') . ' VND' }}
        </div>
        <div class="info-item">
            <span class="info-label">Ngày sử dụng:</span> {{ $order['usage_date'] }}
        </div>
        <div class="info-item">
            <span class="info-label">Số điện thoại:</span> {{ $order['phone'] }}
        </div>
        <div class="info-item">
            <span class="info-label">Email:</span> {{ $order['email'] }}
        </div>
        <div class="ticket-codes">
            <span class="info-label">Mã vé:</span><br>
            @foreach (session('ticketCodes') as $index => $ticketCode)
            <span class="ticket-code">{{ $index + 1 }}. {{ $ticketCode }}</span><br>
            @endforeach
        </div>
    </div>
</body>

</html>