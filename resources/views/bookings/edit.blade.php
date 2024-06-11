<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .error-list {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }
        .error-list ul {
            padding-left: 20px;
            margin: 0;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #4CAF50;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Booking</h1>
        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="name" value="{{ $booking->name }}">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{ $booking->email }}">
            </div>
            <div class="form-group">
                <label>Tanggal Booking:</label>
                <input type="date" name="booking_date" value="{{ $booking->booking_date }}">
            </div>
            <div class="form-group">
                <label>Fasilitas:</label>
                <select name="facility_id">
                    @foreach ($facilities as $facility)
                        <option value="{{ $facility->id }}" {{ $booking->facility_id == $facility->id ? 'selected' : '' }}>{{ $facility->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('bookings.index') }}" class="back-link">Kembali</a>
    </div>
</body>
</html>
