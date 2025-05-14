<!DOCTYPE html>
<html>
<head>
    <title>Daftar Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Donasi</h2>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donasis as $donasi)
                    <tr>
                        <td>{{ $donasi->nama }}</td>
                        <td>{{ $donasi->email ?? '-' }}</td>
                        <td>Rp{{ number_format($donasi->jumlah, 2, ',', '.') }}</td>
                        <td>{{ $donasi->pesan ?? '-' }}</td>
                        <td>{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada donasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
