<!DOCTYPE html>
<html>
<head>
    <title>Admin - Daftar Booking</title>
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
            margin-bottom: 20px;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .actions .button-link {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 10px;
        }
        .create-link {
            background-color: #4CAF50;
        }
        .create-link:hover {
            background-color: #45a049;
        }
        .facilities-link {
            background-color: #007bff;
        }
        .facilities-link:hover {
            background-color: #0056b3;
        }
        .history-link {
            background-color: #6c757d;
        }
        .history-link:hover {
            background-color: #5a6268;
        }
        .search-container {
            display: flex;
            margin-bottom: 20px;
        }
        .search-input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
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
        .action-links a, .action-links button {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-right: 5px;
            border: none;
            cursor: pointer;
        }
        .action-links a.edit-link {
            background-color: #ffc107;
            color: #000;
        }
        .action-links a.delete-link {
            background-color: #dc3545;
            color: #fff;
        }
        .action-links a.detail-link {
            background-color: #007bff;
            color: #fff;
        }
        .action-links button.confirm-link {
            background-color: #28a745;
            color: #fff;
        }
        .action-links button.unconfirm-link {
            background-color: #ffc107;
            color: #000;
        }
        .status-confirmed {
            color: green;
        }
        .status-unconfirmed {
            color: red;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a, .pagination span {
            display: inline-block;
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #007bff;
            transition: background-color 0.3s ease;
        }
        .pagination a:hover, .pagination span.current {
            background-color: #007bff;
            color: #fff;
        }
        .pagination .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Booking</h1>
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <div class="actions">
            <a href="{{ route('bookings.create') }}" class="button-link create-link">Buat Booking Baru</a>
            <a href="{{ route('facilities.index') }}" class="button-link facilities-link">Lihat Fasilitas</a>
            <a href="{{ route('bookings.history') }}" class="button-link history-link">History Booking</a>
        </div>
        <div class="search-container">
            <form action="{{ route('bookings.index') }}" method="GET">
                <input type="text" name="search" class="search-input" placeholder="Cari nama...">
                <button type="submit" class="search-button">Cari</button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal Booking</th>
                    <th>Fasilitas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->facility ? $booking->facility->name : 'Tidak ada fasilitas' }}</td>
                        <td class="{{ $booking->confirmed ? 'status-confirmed' : 'status-unconfirmed' }}">
                            {{ $booking->confirmed ? 'Dikonfirmasi' : 'Belum Dikonfirmasi' }}
                        </td>
                        <td class="action-links">
                            <a href="{{ route('bookings.show', $booking->id) }}" class="detail-link">Detail</a>
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="edit-link">Edit</a>
                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-link" onclick="return confirm('Apakah Anda yakin ingin menghapus booking ini?')">Hapus</button>
                            </form>
                            @if ($booking->confirmed)
                                <form action="{{ route('bookings.unconfirm', $booking->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="unconfirm-link" onclick="return confirm('Apakah Anda yakin ingin membatalkan konfirmasi booking ini?')">Batalkan Konfirmasi</button>
                                </form>
                            @else
                                <form action="{{ route('bookings.confirm', $booking->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="confirm-link" onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi booking ini?')">Konfirmasi</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $bookings->links() }}
        </div>
    </div>
</body>
</html>
