<div class="card card-lightblue shadow">
    @if (App\Http\Controllers\HomeController::payment_status('belum bayar'))
        <div class="card-header">
            <h5 class="card-title m-0">Status</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title"></h6>
            <p class="card-text" id="tunggu">Berkas sedang dalam tahap verifikasi, silahkan tunggu!.
            </p>
        </div>
    @elseif (App\Http\Controllers\HomeController::payment_status('Bukti pembayaran telah diverifikasi'))
        <div class="card-header">
            <h5 class="card-title m-0">Status</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title"></h6>
            <p class="card-text" id="tunggu">Bukti pembayaran sudah diterima, silahkan tunggu admin untuk
                menghubungi nomor Whatsapp anda.
            </p>
        </div>
    @elseif (App\Http\Controllers\HomeController::payment_status('belum diverifikasi'))
        <div class="card-header">
            <h5 class="card-title m-0">Status</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title"></h6>
            <p class="card-text" id="tunggu">Bukti pembayaran sedang dalam tahap verifikasi, silahkan tunggu!.
            </p>
        </div>
    @else
        <div class="card-header">
            <h5 class="card-title m-0">Status</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title"></h6>
            <p class="card-text" id="tunggu">Bukti pembayaran ditolak, silahkan upload lagi!.
            </p>
        </div>
    @endif
</div>
