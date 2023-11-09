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
        
    {{-- Footer CRUD --}}
    <div class="container">
        <div class="card mt-3 mb-4">
            <div class="card-header">
              <h2>Input Data Motor Dagangan</h2>
            </div>
            <div class="card-body">
              {{-- Form input CRUD --}}
              <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-sm-6">
                    <div class="form-group mt-3">
                        <label >Nama Motor</label>
                        <input type="text" name="name" class="form-control mt-1" id="name" value="{{ old('name') }}" placeholder="Masukkan nama motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Gambar Motor</label>
                        <input type="file" name="image" class="form-control mt-1" id="image" value="{{ old('image') }}" placeholder="Masukkan gambar motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Tahun Motor</label>
                        <input type="text" name="tahun" class="form-control mt-1" id="tahun" value="{{ old('tahun') }}" placeholder="Masukan tahun motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Nomor Polisi Motor</label>
                        <input type="text" name="no_polisi" class="form-control mt-1" id="no_polisi" value="{{ old('no_polisi') }}" placeholder="Masukkan nomor polis motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Tanggal Pembelian</label>
                        <input type="date" name="tgl_pembelian" class="form-control mt-1" id="tgl_pembelian" value="{{ old('tgl_pembelian') }}" >
                    </div>
                    <div class="form-group mt-3">
                        <label >Status</label>
                        <select name="status" class="form-control mt-1">
                            <option value="Ready">Belum Terjual</option>
                            <option value="Sold">Terjual</option>
                        </select>
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <div class="form-group mt-3">
                        <label >Tanggal Penjualan</label>
                        <input type="date" name="tgl_terjual" class="form-control mt-1" id="tgl_terjual" value="{{ old('tgl_terjual') }}" >
                    </div>
                    <div class="form-group mt-3">
                        <label >Modal Motor</label>
                        <input type="text" name="modal" class="form-control mt-1" id="modal" value="{{ old('modal') }}" placeholder="Masukkan motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Harga jual Motor</label>
                        <input type="text" name="hrg_jual" class="form-control mt-1" id="hrg_jual" value="{{ old('hrg_jual') }}" placeholder="Masukkan harga jual motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Keuntungan penjualan Motor</label>
                        <input type="text" name="keuntungan" class="form-control mt-1" id="keuntungan" value="{{ old('keuntungan') }}" placeholder="Masukkan keuntungan  motor dagangan">
                    </div>
                    <div class="form-group mt-3">
                        <label >Deskripsi Motor</label>
                        <textarea class="orm-control mt-1" name="deskripsi" id="deskripsi" cols="70" rows="3" value="{{ old('deskripsi') }}" placeholder="Masukkan deskripsi motor dagangan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                    <a href="{{ route('show') }}" class="btn btn-primary mt-3">BACK</a>

                </div>
                </form>
              {{-- End Form input CRUD --}}
            </div>
          </div>
    </div>
    {{-- End Footer CRUD --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>

