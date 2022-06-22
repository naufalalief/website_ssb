
    <div class="card card-lightblue shadow">
        @if (App\Http\Controllers\HomeController::status('belum diverifikasi'))
            <div class="card-header">
                <h5 class="card-title m-0">Status</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title"></h6>
                <p class="card-text" id="tunggu">Berkas sedang dalam tahap verifikasi, silahkan tunggu!.
                </p>
            </div>
        @elseif (App\Http\Controllers\HomeController::status('sudah diverifikasi'))
            <div class="card-header">
                <h5 class="card-title m-0">Status</h5>
            </div>
            <div class="card-body">
                <h6 class="card-title"></h6>
                <p class="card-text" id="tunggu">Berkas sudah diverifikasi, silahkan melakukan pembayaran!.
                </p>
            </div>
        @endif
    </div>
