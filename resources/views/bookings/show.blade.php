<!DOCTYPE html>
<html>
<head>
    <title>Detail Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .details {
            margin: 20px 0;
        }
        .details p {
            margin: 10px 0;
            font-size: 16px;
            color: #333;
        }
        .back-link {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Booking</h1>
        <div class="details">
            <p><strong>ID:</strong> {{ $booking->id }}</p>
            <p><strong>Nama:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Tanggal Booking:</strong> {{ $booking->booking_date }}</p>
        </div>
        <a href="{{ route('bookings.index') }}" class="back-link">Kembali</a>
    </div>
</body>
</html>
