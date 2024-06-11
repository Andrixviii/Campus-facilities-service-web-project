<!DOCTYPE html>
<html>
<head>
    <title>Daftar Fasilitas Gedung</title>
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
            max-width: 1000px;
            margin: 20px auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
        .create-link, .back-link {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }
        .create-link {
            background-color: #4CAF50;
        }
        .create-link:hover {
            background-color: #45a049;
        }
        .back-link {
            background-color: #007bff;
        }
        .back-link:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .edit-link, .delete-link {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .edit-link {
            background-color: #ffc107;
        }
        .edit-link:hover {
            background-color: #e0a800;
        }
        .delete-link {
            background-color: #dc3545;
        }
        .delete-link:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Fasilitas Gedung</h1>
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <a href="{{ route('facilities.create') }}" class="create-link">Tambah Fasilitas Baru</a>
        <a href="{{ route('bookings.index') }}" class="back-link">Kembali ke Daftar Booking</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facilities as $facility)
                    <tr>
                        <td>{{ $facility->id }}</td>
                        <td>{{ $facility->name }}</td>
                        <td>
                            <a href="{{ route('facilities.edit', $facility->id) }}" class="edit-link">Edit</a>
                            <form action="{{ route('facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-link" onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
