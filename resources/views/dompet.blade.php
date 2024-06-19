<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dompet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Halaman Dompet</h1>


    <div class="container">
        <h1>Dompet</h1>

        <div class="row">
            <div class="col-md-6">
                <h2>Aset Bersih</h2>
                <p class="h3">Rp 0</p>
            </div>
            <div class="col-md-6">
                <h2>Aset vs Hutang</h2>
                <div class="row">
                    <div class="col-6">
                        <p class="h5">Aset</p>
                        <p class="h4">Rp 0</p>
                    </div>
                    <div class="col-6">
                        <p class="h5">Hutang</p>
                        <p class="h4">Rp 0</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Tambah Akun</h2>
                <button class="btn btn-primary">+</button>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Akun Bawaan</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="h4">Akun Bawaan</p>
                            </div>
                            <div class="col-6">
                                <p class="h5">Saldo</p>
                                <p class="h4">Rp 0</p>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p class="text-muted">IDR(16.000)</p>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other accounts as needed -->
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
