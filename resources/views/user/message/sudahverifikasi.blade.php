<div class="card-header">
    <h3 class="card-title"><b>Informasi Saat Ini</b></h3>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
        </button>
    </div>
</div>
<div class="card-body">
    <h3 class="card-title">Biaya Daftar</h3><br>

    <p class="card-text">Berkas kamu sudah diverifikasi. <br> Silahkan transfer Rp.5xx.xxx. <br> Ke rekening admin
        dibawah ini.</p>
    Silahkan membayar dengan cara transfer ke rekening dibawah ini. <br>
    @foreach ($rek as $r)
    {{ $loop->iteration }}.
        {{ $r->rekening }}
         a.n 
        {{ $r->name }} <br>
    @endforeach
</div>
