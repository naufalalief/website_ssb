<section class="content">
    <div class="container-fluid">
        @include('admin.dashboard-menu.dashboard-box')
        <div class="card card-info shadow">
            @include('admin.dashboard-menu.dashboard-pendaftar')
        </div><br>
        <div class="card card-yellow shadow">
            @include('admin.dashboard-menu.dashboard-buktibayar')
        </div><br>
        <div class="card card-blue shadow">
            @include('admin.dashboard-menu.dashboard-rekening')
        </div>
    </div>
</section>
