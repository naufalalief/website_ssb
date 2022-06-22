<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            Verifikasi Email
        </h3>
    </div>
    <div class="card-body">
        <p> Email kamu belum terverifikasi, silahkan cek email kamu! <br>
            Belum dapat email verifikasi?</p>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            <button type="submit" class="btn btn-block btn-info btn-xs toastsDefaultBottomRight">
                @csrf
                klik disini!
            </button>
        </form>
    </div>

</div>
