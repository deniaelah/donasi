<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Donasi</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/donasi">Data Donasi</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/login">Login</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Selamat datang di Dashboard Donasi</h2>


        <div class="row">
            <div class="col-md-6">
                <div class="card border-success mb-3">
                    <div class="card-body text-success">
                        <h5 class="card-title">Total Donasi</h5>
                        <p class="card-text fs-4 fw-bold">Rp{{ number_format($totalDonasi, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-info mb-3">
                    <div class="card-body text-info">
                        <h5 class="card-title">Jumlah Donatur</h5>
                        <p class="card-text fs-4 fw-bold">{{ $jumlahDonatur }} orang</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="/admin/donasi" class="btn btn-outline-primary">Lihat Data Donasi</a>
    </div>

</body>
</html>
