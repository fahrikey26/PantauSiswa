@extends('master.index')
@section('ContentModal')
                        <form id="editForm" method="POST" action="/siswa/simpan">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text ni ni-badge" id="basic-addon1"></span>
                                <input type="text" name="nis" id="editNis" class="form-control" placeholder="Nis" aria-label="Nis" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text ni ni-archive-2" id="basic-addon1"></span>
                                <input type="text" name="nisn" id="editNisn" class="form-control" placeholder="Nisn" aria-label="Nisn" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text ni ni-user-run" id="basic-addon1"></span>
                                <input type="text" name="nama" id="editNama" class="form-control" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text ni ni-world" id="basic-addon1"></span>
                                <input type="text" name="tempatLahir" id="editTempatLahir" class="form-control" placeholder="tempatLahir" aria-label="tempatLahir" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text ni ni-diamond" id="basic-addon1"></span>
                                <input type="date" name="tanggalLahir" id="editTanggalLahir" class="form-control" placeholder="tanggalLahir" aria-label="tanggalLahir" aria-describedby="basic-addon1">
                            </div>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</Laki-Laki></option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </form>
@endsection
