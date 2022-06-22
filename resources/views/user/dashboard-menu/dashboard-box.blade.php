<div class="row">
    <div class="col-lg-6 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h5>Status Berkas :</h5>
                <p>{{ $namalengkap->status }} </p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <a href="{{ route('upload') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-6 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h5> Pembayaran : </h5>
                <p>{{ $pembayaran->payment_status  }}</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-receipt"></i>
            </div>
            <a href="{{ route('payment') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
