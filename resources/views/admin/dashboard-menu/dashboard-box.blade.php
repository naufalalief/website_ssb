<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $pendaftar }}</h3>
                </h3>
                <p>Pendaftar</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('verifikasi') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3> {{ $verif }}</h3>
                <p>Sudah Diverifikasi</p>
            </div>
            <div class="icon">
                <i class="fas fa-archive"></i>
            </div>
            <a href="{{ route('verifikasi.acc') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3> {{ $paycount }}</h3>
                <p>Pembayaran</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-receipt"></i>
            </div>
            <a href="{{ route('payments') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3> {{ $rekcount }}</h3>
                <p>Rekening Admin</p>
            </div>
            <div class="icon">
                <i class="fas fa-money-check-dollar"></i>
            </div>
            <a href="{{ route('rekening') }}" class="small-box-footer">More info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
