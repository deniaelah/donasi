<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Aplikasi Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">DonasiKita</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/donasi">Form Donasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5 text-center text-white bg-success">
        <div class="container">
            <h1 class="display-4">Bantu Sesama, Sekarang!</h1>
            <p class="lead">Mari berdonasi untuk mereka yang membutuhkan. Setiap kontribusi sangat berarti.</p>
            <a href="/donasi" class="btn btn-light btn-lg mt-3">Donasi Sekarang</a>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Apa itu DonasiKita?</h3>
                <p>DonasiKita adalah platform sederhana untuk mengumpulkan donasi dari masyarakat luas secara transparan dan mudah.</p>
            </div>
            <div class="col-md-6">
                <h3>Kenapa Berdonasi?</h3>
                <ul>
                    <li>Membantu mereka yang sedang kesulitan</li>
                    <li>Meningkatkan rasa kepedulian sosial</li>
                    <li>Setiap sedikit donasi sangat berarti</li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="text-center py-4 bg-light border-top">
        <p class="mb-0">&copy; {{ date('Y') }} DonasiKita. Dibuat dengan ❤️ oleh Anda.</p>
    </footer>

</body>
</html>
