<div class="container" id="divId">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Upload Berkas</h3>
        </div>
        <form action="{{ Route('upload.save') }}" method="post" enctype="multipart/form-data" id="konten">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input name="email" type="email" class="form-control is-valid" id="konten"
                                placeholder="Enter email" value="{{ $userdetail->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input name="nisn" type="text" class="form-control" id="konten"
                                value="{{ $userdetail->nisn ?? old('nisn') }}">
                        </div>
                        <div class="form-group">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input name="namalengkap" type="text" class="form-control is-valid" id="konten"
                                value="{{ $userdetail->namalengkap }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="ttl">Tanggal Lahir</label>
                            <input name="ttl" type="date" class="form-control" id="konten"
                                value="{{ $userdetail->ttl ?? old('ttl') }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Jl.</span>
                                </div>
                                <input name="alamat" type="text" class="form-control"
                                    value="{{ $userdetail->alamat ?? old('alamat') }}" id="konten">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nisn">Nomor HP/Whatsapp</label>
                            <input name="nohp" type="text" class="form-control" id="konten"
                                value="{{ $userdetail->nohp ?? old('nohp') }}">
                        </div>
                        <div class="form-group">
                            <label for="akunig">Akun Instagram</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input name="akunig" type="text" class="form-control" placeholder="Username"
                                    value="{{ $userdetail->akunig ?? old('akunig') }}" id="konten">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="posisibermain">Posisi Bermain</label>
                            <input name="posisibermain" type="text" class="form-control" id="konten"
                                value="{{ $userdetail->posisibermain ?? old('posisibermain') }}">
                        </div>
                        <div class="form-group">
                            <label for="riwayatssb">Riwayat SSB</label>
                            <input name="riwayatssb" type="text" class="form-control" id="konten"
                                value="{{ $userdetail->riwayatssb ?? old('riwayatssb') }}">
                        </div>
                        <div class="form-group">
                            <label>Prestasi</label>
                            <textarea name="prestasi" class="form-control" id="konten" rows="3" placeholder="Tulis disini...">{{ $userdetail->prestasi ?? old('prestasi') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="tinggibadan">Tinggi Badan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="konten" name="tinggibadan"
                                    value="{{ $userdetail->tinggibadan ?? old('tinggibadan') }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="beratbadan">Berat Badan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="konten" name="beratbadan"
                                    value="{{ $userdetail->beratbadan ?? old('beratbadan') }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namaorangtua">Nama Orang Tua</label>
                            <input type="text" class="form-control" id="konten"
                                value="{{ $userdetail->namaorangtua ?? old('namaorangtua') }}" name="namaorangtua">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan Orang Tua</label>
                            <input type="text" class="form-control" id="konten"
                                value="{{ $userdetail->pekerjaanorangtua ?? old('pekerjaanorangtua') }}"
                                name="pekerjaanorangtua">
                        </div>
                        <div class="form-group">
                            <label for="info">DARI MANA ANDA MENGETAHUI SSB PETROGRES? </label>
                            <input type="text" class="form-control" name="info" id="konten"
                                value="{{ $userdetail->info ?? old('info') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="file">Berkas yang dibutuhkan (KK,KTP,Akte,Ijazah,Foto) dijadikan 1 berupa PDF atau
                        Rar</label>
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
                    <button type="submit" class="btn btn-info" id="submit">Daftar</button>
                </center>
            </div>
        </form>
    </div>
</div>
