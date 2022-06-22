<div class="card-header">
    <h3 class="card-title"><b>Pendaftar</b></h3>
    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
        </button>
    </div>
</div>
<div class="card-body p-0 table-responsive">
    <table class="table table-fixed text-nowrap">
        <thead>
            <tr>
                <th>
                    <b>#</b>
                </th>
                <th>
                    Email
                </th>
                <th>
                    Nama Lengkap
                </th>
                <th>
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userdetail as $ud)
                {{-- {{ dd($userdetail[0]) }} --}}
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $ud->email }}
                    </td>
                    <td>
                        {{ $ud->namalengkap }}
                    </td>
                    <td>
                        <p>{{ $ud->status }}</p>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <span class="m-0 float-right">
                        <a href="{{ route('verifikasi') }}">Lihat Selengkapnya</a>
                    </span>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
