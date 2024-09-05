<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #ffffffd1">
    <div class="container mt-5">
        <h2>Checkout</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <form action="/checkout" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="address" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="city">Kota</label>
                            <input type="text" class="form-control" id="city" name="kota" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="postal-code">Kode Pos</label>
                            <input type="text" class="form-control" id="postal-code" name="kode_pos" placeholder="Kode Pos">
                        </div>
                        <label for="postal-code">Metode Pembayaran</label>
                        <div class="form-group">
                            <label for="country" class="form-label">Pilih Metode Pembayaran</label>
                            <select class="form-select" id="country" required>
                                <option value="">COD</option>
                                <option value="">Dana</option>
                            </select>
                        </div>
                <a href="/checkout" class="btn btn-primary">Konfirmasi Pembayaran</a>
                    </form>
                </div>

            </div>

            {{-- <div class="row">
                <div class="col-md-12">
                    <h4>Ringkasan Pesanan</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Produk B <span class="float-right">$35.00</span></li>
                        <li class="list-group-item">Produk B <span class="float-right">$35.00</span></li>
                        <li class="list-group-item">Pengiriman <span class="float-right">$5.00</span></li>
                        <li class="list-group-item list-group-item-secondary">Total <span class="float-right">$60.00</span></li>
                    </ul>
                </div>
            </div> --}}
            {{-- <div class="text-center mt-4">
                <a href="/checkout/{{}}" class="btn btn-primary">Konfirmasi Pembayaran</a>
            </div> --}}



            {{-- <button type="submit" class="btn btn-primary mt-3">Konfirmasi Pembayaran</button>
            <a href="/checkout" style="background-color: #7a447ed1;">Konfirmasi Pembayaran</a> --}}
                </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
