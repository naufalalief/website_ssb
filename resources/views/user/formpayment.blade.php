<div class="container" id="divId">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Upload Bukti Pembayaran</h3>
        </div>
        <form action="{{ Route('bukti.save') }}" method="post" enctype="multipart/form-data" id="konten">
            @csrf
            <div class="hidden">
                <input type="hidden" name="id_user" value="{{ Auth::id() }}">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="file">Bukti Pembayaran berupa Scan atau Foto</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" value="old('file')" id="labelfoto" name="file">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <center>
                    <button type="submit" class="btn btn-info" id="submit">Upload</button>
                </center>
            </div>
        </form>
    </div>
</div>
