<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>

  <div class="text-center mt-5">
    <h2>Selamat Datang</h2>
    <p>Silahkan Registrasi</p>

    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-start">
                    <form action="{{ route('register.submit') }}" method="post">
                        @csrf
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control mb-2">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control mb-2">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control mb-2">
                        <button class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>