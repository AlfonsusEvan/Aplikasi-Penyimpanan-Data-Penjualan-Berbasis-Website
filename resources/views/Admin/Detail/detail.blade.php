<!doctype html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="images/x-icon" href="images/icons/storage.webp">
            <title>Website-Storage</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
        </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-md-6">
                            <h2>Detail Data {{ $motor->name }}</h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('show') }}" class="btn btn-primary">BACK</a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if (session('updated'))
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div style="text-align: center">
                                        {{ session('updated') }}
                                    </div>
                                </div>
                            @endif  
                            <div class="col-md-6">
                                <img src="{{ url('images') }}/{{ $motor->image }}" class="card-img-top img-fluid" style="max-height: 400px" alt="">
                            </div>
                            <div class="col-md-6">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama Motor</td>
                                            <td>:</td>
                                            <td>{{ $motor->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td>:</td>
                                            <td>{{ $motor->tahun }}</td>
                                        </tr>
                                        <tr>
                                            <td>Plat Motor</td>
                                            <td>:</td>
                                            <td>{{ $motor->no_polisi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pembelian</td>
                                            <td>:</td>
                                            <td>{{ $motor->tgl_pembelian }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Terjual</td>
                                            <td>:</td>
                                            <td>{{ $motor->tgl_terjual }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>{{ $motor->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Modal Motor</td>
                                            <td>:</td>
                                            <td>Rp.{{ $motor->modal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga terjualnya</td>
                                            <td>:</td>
                                            <td>Rp.{{ $motor->hrg_jual }}</td>
                                        </tr>
                                        <tr>
                                            <td>Keuntungan Motor</td>
                                            <td>:</td>
                                            <td>Rp.{{ $motor->keuntungan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Motor</td>
                                            <td>:</td>
                                            <td>{{ $motor->deskripsi }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <div class="text-end">
                                        <a href="{{ url('edit', $motor->id) }}" class="btn btn-warning">UPDATE</a>
                                        <a href="{{ url('delete', $motor->id) }}" class="btn btn-danger">DELETE</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

