<!DOCTYPE html>
<html>
<head>
    <title>Form Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Form Donasi</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/donasi">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email (opsional)</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Donasi</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pesan (opsional)</label>
                <textarea name="pesan" class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Donasi</button>
        </form>
    </div>
</body>
</html>
