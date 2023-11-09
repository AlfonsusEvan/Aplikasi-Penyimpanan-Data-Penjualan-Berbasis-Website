<div class="container">
    <div class="row">   
            <h1 style="text-align: center" class="mt-5">Data - Data Penjualan Motor Dagangan</h1>
            <button type="button" class="btn btn-success mt-2"> <a href="{{ route('addData') }}" style="color: white">AddData</a></button>
    </div>
    <hr>
        <div class="row ms-5">
            @if (session('Success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div style="text-align: center">
                    {{ session('Success') }}
                </div>
              </div>
            @endif
            @if (session('Deletedd'))
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div style="text-align: center">
                    {{ session('Deletedd') }}
                </div>
              </div>
            @endif    
            @foreach ($motors as $motor)
                <div class="col-md-4 mt-3 justify-content-center">
                    <div class="card"  style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ url('images') }}/{{ $motor->image }}" class="card-img-top img-fluid" style="max-height: 200px" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Nama Motor : {{ $motor->name }}</h5>
                        <p class="card-text">
                            <hr>
                            <strong>Tahun :</strong> {{ $motor->tahun }} <br>
                            <strong>Plat Nomor :</strong> {{ $motor->no_polisi }} <br>
                            <strong>Modal :</strong> Rp.{{ $motor->modal }} <br>
                            <strong>Tanggal Pembelian :</strong> {{ $motor->tgl_pembelian }}
                            <hr>
                        </p>
                        <h6 class="card-text">Status : {{ $motor->status }}</h6>
                        <a href="{{ url('detail') }}/{{ $motor->id }}" class="btn btn-primary">Halaman Detail</a>
                    </div>
                    </div>
                    </div>
                </div>  
            @endforeach
        </div>
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {{ $motors->links() }}
            </ul>
        </nav>
</div>

