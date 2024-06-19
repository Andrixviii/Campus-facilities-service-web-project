<!DOCTYPE html>
<html>
<head>
    <title>Buat Booking Baru</title>
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
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-link {
            display: inline-block;
            text-decoration: none;
            color: #4CAF50;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buat Booking Baru</h1>
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div>
                <label>Nama:</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label>Tanggal Booking:</label>
                <input type="date" name="booking_date" value="{{ old('booking_date') }}">
            </div>
            <div>
                <label>Fasilitas:</label>
                <select name="facility_id">
                    @foreach ($facilities as $facility)
                        <option name = "facility_id" value="{{ $facility->id }}" {{ old('facility_id') == $facility->id ? 'selected' : '' }}>{{ $facility->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Simpan</button>
        </form>
        <a href="{{ route('bookings.index') }}" class="back-link">Kembali</a>
    </div>
</body>
</html>
