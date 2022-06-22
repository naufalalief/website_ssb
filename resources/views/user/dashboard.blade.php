<section class="content">
    <div class="container-fluid">
        @include('user.dashboard-menu.dashboard-box')
        <div class="card card-lightblue shadow" id="divId">
            @if (App\Http\Controllers\HomeController::status('sudah diverifikasi'))
                @include('user.message.sudahverifikasi')
            @endif
            @if (App\Http\Controllers\HomeController::status('Berkas pendaftar ditolak'))
                @include('user.message.berkasditolak')
            @endif
        </div>
        @if (App\Http\Controllers\HomeController::payment_status('Bukti pembayaran telah diverifikasi'))
            @include('user.message.Pstatus')
            <script type="text/javascript">
                document.getElementById('divId').style.display = 'none';
            </script>
        @endif
        @if (App\Http\Controllers\HomeController::payment_status('Bukti pembayaran ditolak'))
            @include('user.message.Pstatus')
            <script type="text/javascript">
                document.getElementById('divId').style.display = 'none';
            </script>
        @endif
        @if (App\Http\Controllers\HomeController::payment_status('Belum diverifikasi'))
            @include('user.message.Pstatus')
            <script type="text/javascript">
                document.getElementById('divId').style.display = 'none';
            </script>
        @endif
        <div class="card card-yellow shadow">
            @include('user.dashboard-menu.dashboard-information')
        </div>
    </div>
</section>
