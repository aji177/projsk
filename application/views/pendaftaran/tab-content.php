<template id="satwil">
    <div class="tab-pane pt-3 active">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <select name="keperluan" id="keperluan" class="form-control">
                        <option>-- Pilih Keperluan</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="polda" id="polda" class="form-control">
                        <option>-- Pilih Kesatuan (Polda)</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="polres" id="polres" class="form-control" disabled="true">
                        <option>-- Pilih Kesatuan (Polres)</option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="polsek" id="polsek" class="form-control" disabled="true">
                        <option>-- Pilih Kesatuan (Polsek)</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>

    </div>
</template>

<template id="pribadi">
    <div class="container">
        <div class="row">
            <!-- Data Input -->
            <div class="col-xs-12 col-md-8">

                <!-- Nama Lengkap -->
                <div class="row">
                    <div class="col-xs-12 col-md-12">

                        <div class="form-group">
                            <label for="namalengkap" lang="id">Nama Lengkap</label>
                            <input type="text" class="form-control input-sm text-uppercase" id="namalengkap" name="namalengkap">
                        </div>

                    </div>
                </div>

                <!-- Tempat dan Tanggal Lahir -->
                <div class="row">
                    <div class="col-xs-12 col-md-9 vdivide">

                        <div class="form-group">
                            <label for="tempatlahir" lang="id">Tempat Lahir</label>
                            <input type="text" class="form-control input-sm" id="tempatlahir" name="tempatlahir">
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-3">

                        <div class="form-group">
                            <label for="tgllahir" lang="id">Tgl. Lahir</label>
                            <input type="text" class="form-control input-sm text-center" id="tgllahir" name="tgllahir">
                        </div>

                    </div>
                </div>

                <!-- Jenis Kelamin, Status Perkawinan, dan Kewarganegaraan -->
                <div class="row">
                    <div class="col-xs-12 col-md-4 vdivide">

                        <div class="form-group">
                            <label for="jeniskelamin" lang="id">Jenis Kelamin</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="jeniskelamin" id="jeniskelamin1" value="LAKI-LAKI" checked="checked"><span lang="id">LAKI-LAKI</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jeniskelamin" id="jeniskelamin2" value="PEREMPUAN"><span lang="id">PEREMPUAN</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4 vdivide">

                        <div class="form-group">
                            <label for="statusperkawinan" lang="id">Status Perkawinan</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="statusperkawinan" class="statusperkawinan" value="KAWIN"><span lang="id">KAWIN</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="statusperkawinan" class="statusperkawinan" value="BELUM KAWIN" checked="checked"><span lang="id">BELUM KAWIN</span>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4">

                        <div class="form-group">
                            <label for="kewarganegaraan" lang="id">Kewarganegaraan</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan1" value="WNI" checked="checked"><span lang="id">WNI</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan2" value="WNA"><span lang="id">WNA</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Agama, Pekerjaan dan No. Telp -->
                <div class="row">
                    <div class="col-xs-12 col-md-4 vdivide">

                        <div class="form-group">
                            <label for="agama" lang="id">Agama</label>
                            <select class="form-control input-sm" id="agama" name="agama">
                                <option value="" lang="id">Pilih agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                                <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konhuchu">Konhuchu</option>
                                <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-5 vdivide">

                        <div class="form-group">
                            <label for="pekerjaan" lang="id">Pekerjaan</label>
                            <input type="text" class="form-control input-sm" id="pekerjaan" name="pekerjaan">
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-3">

                        <div class="form-group">
                            <label for="notelp" lang="id">No. Telp. / HP</label>
                            <input type="tel" class="form-control input-sm" id="notelp" name="notelp">
                        </div>

                    </div>

                </div>

                <!-- Alamat KTP dan Alamat Sekarang -->
                <div class="row">
                    <div class="col-xs-12 col-md-12">

                        <div class="row">
                            <!-- Alamat Sekarang -->
                            <div class="col-xs-12 col-md-12">

                                <div class="form-group">
                                    <label for="alamatsekarang" lang="id">Alamat (Saat ini)</label>
                                    <textarea class="form-control input-sm" rows="3" name="alamatsekarang" id="alamatsekarang"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="provinsisekarang" lang="id">Provinsi (Saat ini)</label>
                                    <select class="form-control input-sm" name="provinsisekarang" id="provinsisekarang">
                                        <option value="" lang="id">Pilih Provinsi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="kabkota" lang="id">Kabupaten / Kota (Saat ini)</label>
                                    <select class="form-control input-sm" name="kabkotasekarang" disabled="disabled" id="kabkotasekarang">
                                        <option value="" lang="id">Pilih Kabupaten / Kota</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="kecamatansekarang" lang="id">Kecamatan (Saat ini)</label>
                                    <select class="form-control input-sm" name="kecamatansekarang" disabled="disabled" id="kecamatansekarang">
                                        <option value="" lang="id">Pilih Kecamatan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="kelurahansekarang" lang="id">Kelurahan (Saat ini)</label>
                                    <select class="form-control input-sm" name="kelurahansekarang" disabled="disabled" id="kelurahansekarang">
                                        <option value="" lang="id">Pilih Kelurahan</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <!-- No. Identitas dan No. Paspor -->
                <div class="row">
                    <div class="col-xs-12 col-md-7 vdivide">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="noidentitas" lang="id">No. Identitas</label>
                                </div>
                                <div class="col-xs-3">
                                    <select class="form-control input-sm" id="jenisidentitas" name="jenisidentitas">
                                        <option value="" lang="id">Pilih</option>
                                        <option value="eKTP">E-KTP</option>
                                        <option value="KTP">KTP</option>
                                        <option value="KITAS">KITAS</option>
                                        <option value="KITAP">KITAP</option>
                                    </select>
                                </div>
                                <div class="col-xs-9" style="margin-left: -20px;">
                                    <input type="text" class="form-control input-sm" id="noidentitas" name="noidentitas">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-5">

                        <div class="form-group">
                            <label for="nopaspor" lang="id">No. Paspor</label>
                            <input type="text" class="form-control input-sm" id="nopaspor" name="nopaspor">
                        </div>

                    </div>
                </div>

            </div>

            <!-- Photo -->
            <div class="col-xs-12 col-md-4 text-center" style="margin-left: -30px;">

                <div class="form-group">
                    <label for="foto" lang="id">Foto</label>
                    <div class="row">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 151px; height: 201px;">
                                <img src="https://skck.polri.go.id/assets/img/4x6.png">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 151px; max-height: 201px;"></div>
                            <div>
                                <span class="btn btn-primary btn-file btn-sm">
                                    <span class="fileinput-new" lang="id">Pilih foto</span>
                                    <span class="fileinput-exists" lang="id">Ubah</span>
                                    <input type="file" name="foto" id="foto">
                                </span>
                                <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                            </div>
                            <label id="foto-error" class="error" for="foto" lang="id"></label>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<template id="keluarga">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">Menerangkan hal-hal sebagai jawaban/keterangan atas pertanyaan-pertanyaan diajukan sebagai berikut:</i></small></p>
        </div>

        <!-- Data Istri / Suami -->
        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">A. Data Istri / Suami</i></small></p>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label lang="id">Hubungan</label>
                    <select class="form-control input-sm" name="ishubungan" id="ishubungan" disabled="disabled">
                        <option value="" lang="id">Pilih hubungan</option>
                        <option value="Istri" lang="id">Istri</option>
                        <option value="Suami" lang="id">Suami</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-8 vdivide">
                <div class="form-group">
                    <label lang="id">Nama Lengkap</label>
                    <input type="text" class="form-control input-sm text-uppercase" name="isnamalengkaphubungan" id="isnamalengkaphubungan" disabled="disabled">
                </div>
            </div>

            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <label lang="id">Umur</label>
                    <div class="input-group">
                        <input type="text" class="form-control input-sm text-uppercase text-center" name="isumurhubungan" id="isumurhubungan" disabled="disabled">
                        <span class="input-group-addon" lang="id">thn</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 vdivide">
                <div class="form-group">
                    <label for="isagama" lang="id">Agama</label>
                    <select class="form-control input-sm" id="isagamahubungan" name="isagamahubungan" disabled="disabled">
                        <option value="" lang="id">Pilih agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                        <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konhuchu">Konhuchu</option>
                        <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label for="iskewarganegaraan" lang="id">Kewarganegaraan</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="iskewarganegaraanhubungan" id="iskewarganegaraanhubungan1" value="wni" checked="checked" disabled="disabled"><span lang="id">WNI</span>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="iskewarganegaraanhubungan" id="iskewarganegaraanhubungan2" value="wna" disabled="disabled"><span lang="id">WNA</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-7">
                <div class="form-group">
                    <label for="ispekerjaan" lang="id">Pekerjaan</label>
                    <input type="text" class="form-control input-sm" id="ispekerjaanhubungan" name="ispekerjaanhubungan" disabled="disabled">
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="row">

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="isalamatsekarang" lang="id">Alamat (Saat ini)</label>
                            <textarea class="form-control input-sm row-textarea" name="isalamathubungan" id="isalamathubungan" disabled="disabled"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="isprovinsisekarang" lang="id">Provinsi</label>
                            <select class="form-control input-sm" name="isprovinsihubungan" id="isprovinsihubungan" disabled="disabled">
                                <option lang="id">Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="iskabkotasekarang" lang="id">Kabupaten / Kota</label>
                            <select class="form-control input-sm" name="iskabkotahubungan" id="iskabkotahubungan" disabled="disabled">
                                <option value="" lang="id">Pilih Kabupaten / Kota</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="iskecamatansekarang" lang="id">Kecamatan</label>
                            <select class="form-control input-sm" name="iskecamatanhubungan" id="iskecamatanhubungan" disabled="disabled">
                                <option value="" lang="id">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="kelurahansekarang" lang="id">Kelurahan</label>
                            <select class="form-control input-sm" name="iskelurahanhubungan" id="iskelurahanhubungan" disabled="disabled">
                                <option value="" lang="id">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Data Ayah -->
        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">B. Data Ayah</i></small></p>

            <div class="col-xs-12 col-md-8 vdivide">
                <div class="form-group">
                    <label lang="id">Nama Lengkap</label>
                    <input type="text" class="form-control input-sm text-uppercase" name="ayahnamalengkap" id="ayahnamalengkap">
                    <input type="hidden" name="hubunganayah" value="Ayah">
                </div>
            </div>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label lang="id">Umur</label>
                    <div class="input-group">
                        <input type="text" class="form-control input-sm text-uppercase text-center" name="ayahumur" id="ayahumur">
                        <span class="input-group-addon" lang="id">thn</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <label for="ayahagama" lang="id">Agama</label>
                    <select class="form-control input-sm" id="ayahagama" name="ayahagama">
                        <option value="" lang="id">Pilih agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                        <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konhuchu">Konhuchu</option>
                        <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label for="ayahkewarganegaraan" lang="id">Kewarganegaraan</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="ayahkewarganegaraan" id="ayahkewarganegaraan1" value="wni" checked="checked"><span lang="id">WNI</span>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ayahkewarganegaraan" id="ayahkewarganegaraan2" value="wna"><span lang="id">WNA</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-7">
                <div class="form-group">
                    <label for="ayahpekerjaan" lang="id">Pekerjaan</label>
                    <input type="text" class="form-control input-sm" id="ayahpekerjaan" name="ayahpekerjaan">
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="row">

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ayahalamatsekarang" lang="id">Alamat (Saat ini)</label>
                            <textarea class="form-control input-sm row-textarea" name="ayahalamat" id="ayahalamat"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ayahprovinsi" lang="id">Provinsi</label>
                            <select class="form-control input-sm" name="ayahprovinsi" id="ayahprovinsi">
                                <option lang="id">Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ayahkabkota" lang="id">Kabupaten / Kota</label>
                            <select class="form-control input-sm" name="ayahkabkota" id="ayahkabkota" disabled="disabled">
                                <option value="" lang="id">Pilih Kabupaten / Kota</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ayahkecamatan" lang="id">Kecamatan</label>
                            <select class="form-control input-sm" name="ayahkecamatan" id="ayahkecamatan" disabled="disabled">
                                <option value="" lang="id">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ayahkelurahan" lang="id">Kelurahan</label>
                            <select class="form-control input-sm" name="ayahkelurahan" id="ayahkelurahan" disabled="disabled">
                                <option value="" lang="id">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Data Ibu -->
        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">C. Data Ibu</i></small></p>

            <div class="col-xs-12 col-md-8 vdivide">
                <div class="form-group">
                    <label lang="id">Nama Lengkap</label>
                    <input type="text" class="form-control input-sm text-uppercase" name="ibunamalengkap" id="ibunamalengkap">
                    <input type="hidden" name="hubunganibu" value="Ibu">
                </div>
            </div>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label lang="id">Umur</label>
                    <div class="input-group">
                        <input type="text" class="form-control input-sm text-uppercase text-center" name="ibuumur" id="ibuumur">
                        <span class="input-group-addon" lang="id">thn</span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-2">
                <div class="form-group">
                    <label for="ibuagama" lang="id">Agama</label>
                    <select class="form-control input-sm" id="ibuagama" name="ibuagama">
                        <option value="" lang="id">Pilih agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                        <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konhuchu">Konhuchu</option>
                        <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-2 vdivide">
                <div class="form-group">
                    <label for="ibukewarganegaraan" lang="id">Kewarganegaraan</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="ibukewarganegaraan" id="ibukewarganegaraan1" value="wni" checked="checked"><span lang="id">WNI</span>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ibukewarganegaraan" id="ibukewarganegaraan2" value="wna"><span lang="id">WNA</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-7">
                <div class="form-group">
                    <label for="ibupekerjaan" lang="id">Pekerjaan</label>
                    <input type="text" class="form-control input-sm" id="ibupekerjaan" name="ibupekerjaan">
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="row">

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ibualamat" lang="id">Alamat (Saat ini)</label>
                            <textarea class="form-control input-sm row-textarea" name="ibualamat" id="ibualamat"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ibuprovinsi" lang="id">Provinsi</label>
                            <select class="form-control input-sm" name="ibuprovinsi" id="ibuprovinsi">
                                <option lang="id">Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ibukabkota" lang="id">Kabupaten / Kota</label>
                            <select class="form-control input-sm" name="ibukabkota" id="ibukabkota" disabled="disabled">
                                <option value="" lang="id">Pilih Kabupaten / Kota</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ibukecamatan" lang="id">Kecamatan</label>
                            <select class="form-control input-sm" name="ibukecamatan" id="ibukecamatan" disabled="disabled">
                                <option value="" lang="id">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="ibukelurahan" lang="id">Kelurahan</label>
                            <select class="form-control input-sm" name="ibukelurahan" id="ibukelurahan" disabled="disabled">
                                <option value="" lang="id">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Data Saudara -->
        <div class="col-xs-12 col-md-12">
            <p class="text-muted"><small><i lang="id">D. Data Saudara Sekandung / Tiri</i></small></p>

            <div class="row-saudara">
                <div class="row">

                    <div class="col-xs-1 text-center vcenter">
                        <p class="text-muted number">1.</p>
                    </div>

                    <div class="col-xs-11">

                        <div class="col-xs-12 col-md-8 vdivide">
                            <div class="form-group">
                                <label lang="id">Nama Lengkap</label>
                                <input type="text" class="form-control input-sm text-uppercase" name="saudaranamalengkap[]" id="saudaranamalengkap">
                                <input type="hidden" name="hubungansaudara[]" value="Saudara">
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-2 vdivide">
                            <div class="form-group">
                                <label lang="id">Umur</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm text-uppercase text-center" name="saudaraumur[]" id="saudaraumur">
                                    <span class="input-group-addon" lang="id">thn</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-2">
                            <div class="form-group">
                                <label for="saudaraagama" lang="id">Agama</label>
                                <select class="form-control input-sm" id="saudaraagama" name="saudaraagama[]">
                                    <option value="NULL" lang="id">Pilih agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Khatolik" lang="id">Kristen Khatolik</option>
                                    <option value="Kristen Protestan" lang="id">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konhuchu">Konhuchu</option>
                                    <option value="Kepercayaan Terhadap Tuhan YME" lang="id">Kepercayaan Terhadap Tuhan YME</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-3 vdivide">
                            <div class="form-group">
                                <label for="saudarakewarganegaraan" lang="id">Kewarganegaraan</label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" name="saudarakewarganegaraan[0]" id="saudarakewarganegaraan1" value="WNI" checked="checked"><span lang="id">WNI</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="saudarakewarganegaraan[0]" id="saudarakewarganegaraan1" value="WNA"><span lang="id">WNA</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-7">
                            <div class="form-group">
                                <label for="saudarapekerjaan" lang="id">Pekerjaan</label>
                                <input type="text" class="form-control input-sm" id="saudarapekerjaan" name="saudarapekerjaan[]">
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12">
                            <div class="row">

                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="saudaraalamat" lang="id">Alamat (Saat ini)</label>
                                        <textarea class="form-control input-sm row-textarea" name="saudaraalamat[]" id="saudaraalamat"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="saudaraprovinsi" lang="id">Provinsi</label>
                                        <select class="form-control input-sm" name="saudaraprovinsi[]" id="saudaraprovinsi">
                                            <option value="0" lang="id">Pilih Provinsi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="saudarakabkota" lang="id">Kabupaten / Kota</label>
                                        <select class="form-control input-sm" name="saudarakabkota[]" id="saudarakabkota" disabled="disabled">
                                            <option value="0" lang="id">Pilih Kabupaten / Kota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="saudarakecamatan" lang="id">Kecamatan</label>
                                        <select class="form-control input-sm" name="saudarakecamatan[]" id="saudarakecamatan" disabled="disabled">
                                            <option value="0" lang="id">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="saudarakelurahan" lang="id">Kelurahan</label>
                                        <select class="form-control input-sm" name="saudarakelurahan[]" id="saudarakelurahan" disabled="disabled">
                                            <option value="0" lang="id">Pilih Kelurahan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-xs-12">
                <button type="button" class="btn btn-success btn-sm btn-remove-row" disabled="disabled"><i class="fa fa-times" aria-hidden="true"></i> <span lang="id">Hapus Saudara Sekandung / Tiri</span></button>
                <button type="button" class="btn btn-warning btn-sm btn-add-row pull-right"><i class="fa fa-plus" aria-hidden="true"></i> <span lang="id">Tambah Saudara Sekandung / Tiri</span></button>
            </div>

        </div>

    </div>
</template>

<template id="pendidikan">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">Riwayat Pendidikan</i></small></p>
        </div>

        <div class="row-pendidikan">

            <div class="col-xs-12 col-md-2 vdivide" style="width: 175px !important;">
                <div class="form-group">
                    <label lang="id">Tingkat</label>
                    <select class="form-control input-sm" name="pendidikan[]" id="pendidikan">
                        <option value="" lang="id">Pilih</option>
                        <option value="SD" lang="id">SD (Sederajat)</option>
                        <option value="SMP" lang="id">SMP (Sederajat)</option>
                        <option value="SMA" lang="id">SMA (Sederajat)</option>
                        <option value="DIPLOMA" lang="id">DIPLOMA</option>
                        <option value="S1" lang="id">S1</option>
                        <option value="S2" lang="id">S2</option>
                        <option value="S3" lang="id">S3</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-3 vdivide">
                <div class="form-group">
                    <label lang="id">Nama Sekolah / Univ. / Perguruan Tinggi</label>
                    <input type="text" class="form-control input-sm text-uppercase" name="namapendidikan[]" id="namapendidikan">
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="form-group">
                    <label for="isprovinsisekarang" lang="id">Provinsi</label>
                    <select class="form-control input-sm" name="provinsipendidikan[]" id="provinsipendidikan">
                        <option lang="id">Pilih Provinsi</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="form-group">
                    <label for="isprovinsisekarang" lang="id">Kab. / Kota</label>
                    <select class="form-control input-sm" name="kabkotapendidikan[]" id="kabkotapendidikan" disabled="disabled">
                        <option value="" lang="id">Pilih Kabupaten / Kota</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-md-1">
                <div class="form-group">
                    <label lang="id">Tahun</label>
                    <input type="text" class="form-control input-sm text-uppercase text-center" name="thnpendidikan[]" id="thnpendidikan">
                </div>
            </div>

        </div>

        <div class="col-xs-12">
            <button type="button" class="btn btn-success btn-sm btn-remove-pendidikan" disabled="disabled"><i class="fa fa-times" aria-hidden="true"></i> <span lang="id">Hapus Riwayat Pendidkan</span></button>
            <button type="button" class="btn btn-warning btn-sm btn-add-pendidikan pull-right"><i class="fa fa-plus" aria-hidden="true"></i> <span lang="id">Tambah Riwayat Pendidikan</span></button>
        </div>

    </div>
</template>

<template id="pidana">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">Tersangkut Perkara Pidana dan Pelanggaran</i></small></p>
        </div>

        <!-- Perkara Piadana -->
        <div class="col-xs-12 col-md-12">

            <div class="row">

                <!-- Perkara Pidana -->
                <div class="col-xs-12 col-md-6 vdivide">

                    <p class="text-muted"><small><i lang="id">1. Perkara Pidana</i></small></p>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Apakah Saudara pernah tersangkut perkara pidana ?</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="ispidana" class="ispidana" value="PERNAH"> <span lang="id">PERNAH</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ispidana" class="ispidana" value="TIDAK PERNAH" checked="checked"> <span lang="id">TIDAK PERNAH</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Dalam perkara apa ?</label>
                            <input type="text" class="form-control input-sm" name="isperkarapidana" id="isperkarapidana" disabled="disabled">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Bagaimana putusan dan vonis hakim ?</label>
                            <input type="text" class="form-control input-sm" name="isvonispidana" id="isvonispidana" disabled="disabled">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Apakah saudara saat ini sedang dalam proses perkara pidana ? Kasus apa ?</label>
                            <input type="text" class="form-control input-sm" name="isprosespidana" id="isprosespidana" disabled="disabled">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Sampai sejauh mana proses hukumnya ?</label>
                            <input type="text" class="form-control input-sm" name="ishukumpidana" id="ishukumpidana" disabled="disabled">
                        </div>
                    </div>

                </div>

                <!-- Pelanggaran -->
                <div class="col-xs-12 col-md-6">

                    <p class="text-muted"><small><i lang="id">2. Pelanggaran</i></small></p>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Apakah Saudara pernah melakukan pelanggaran hukum dan atau norma-norma sosial ?</label>
                            <div>
                                <label class="radio-inline">
                                    <input type="radio" name="ispelanggaran" class="ispelanggaran" value="PERNAH"> <span lang="id">PERNAH</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="ispelanggaran" class="ispelanggaran" value="TIDAK PERNAH" checked="checked"> <span lang="id">TIDAK PERNAH</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Pelanggaran hukum atau norma-norma sosial apa ?</label>
                            <input type="text" class="form-control input-sm" name="isnormapelanggaran" id="isnormapelanggaran" disabled="disabled">
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                            <label lang="id">Sampai sejauh mana prosesnya ?</label>
                            <input type="text" class="form-control input-sm" name="isprosespelanggaran" id="isprosespelanggaran" disabled="disabled">
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</template>

<template id="fisik">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">Ciri Fisik</i></small></p>
        </div>

        <div class="col-xs-12 col-md-6">

            <div class="form-group">
                <label for="rambut" lang="id">Rambut</label>
                <input type="text" class="form-control input-sm text-uppercase" name="isrambut" id="isrambut">
            </div>

            <div class="form-group">
                <label for="wajah" lang="id">Wajah</label>
                <input type="text" class="form-control input-sm text-uppercase" name="iswajah" id="iswajah">
            </div>

            <div class="form-group">
                <label for="kulit" lang="id">Kulit</label>
                <input type="text" class="form-control input-sm text-uppercase" name="iskulit" id="iskulit">
            </div>

            <div class="form-group">
                <label for="tinggibadan" lang="id">Tinggi Badan</label>
                <div class="input-group">
                    <input type="text" class="form-control input-sm text-uppercase text-center" name="istinggibadan" id="istinggibadan">
                    <span class="input-group-addon">cm</span>
                </div>
            </div>

            <div class="form-group">
                <label for="beratbadan" lang="id">Berat Badan</label>
                <div class="input-group">
                    <input type="text" class="form-control input-sm text-uppercase text-center" name="isberatbadan" id="isberatbadan">
                    <span class="input-group-addon">kg</span>
                </div>
            </div>

            <div class="form-group">
                <label for="tandaistimewa" lang="id">Tanda Istimewa</label>
                <input type="text" class="form-control input-sm text-uppercase" name="istandaistimewa" id="istandaistimewa">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12 col-md-6 vdivide">
                        <label for="rumusjari" lang="id">Rumus Sidik Jari (kiri)</label>
                        <input type="text" class="form-control input-sm text-uppercase" name="isrumusjarikiri" id="isrumusjarikiri">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="rumusjari" lang="id">Rumus Sidik Jari (kanan)</label>
                        <input type="text" class="form-control input-sm text-uppercase" name="isrumusjarikanan" id="isrumusjarikanan">
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<template id="lampiran">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">
            <p class="text-muted"><small><i lang="id">Unggah Lampiran</i></small></p>
        </div>

        <div class="col-xs-12 col-md-8">

            <!-- KTP -->
            <div class="form-group">
                <label for="ktp" lang="id">KTP</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new" lang="id">Pilih Lampiran</span>
                        <span class="fileinput-exists" lang="id">Ubah</span>
                        <input type="file" name="ktplampiran">
                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                </div>
                <label id="ktplampiran-error" class="error" for="ktplampiran" lang="id"></label>
            </div>

            <!-- Paspor -->
            <div class="form-group">
                <label for="paspor" lang="id">Paspor</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new" lang="id">Pilih Lampiran</span>
                        <span class="fileinput-exists" lang="id">Ubah</span>
                        <input type="file" name="pasporlampiran">
                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                </div>
            </div>

            <!-- Kartu Keluarga -->
            <div class="form-group">
                <label for="kartukeluarga" lang="id">Kartu Keluarga</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new" lang="id">Pilih Lampiran</span>
                        <span class="fileinput-exists" lang="id">Ubah</span>
                        <input type="file" name="kklampiran">
                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                </div>
            </div>

            <!-- Akte -->
            <div class="form-group">
                <label for="akte" lang="id">Akte Lahir / Ijazah</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new" lang="id">Pilih Lampiran</span>
                        <span class="fileinput-exists" lang="id">Ubah</span>
                        <input type="file" name="aktelampiran">
                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                </div>
            </div>

            <!-- Sidik Jari -->
            <div class="form-group">
                <label for="sidikjari" lang="id">Sidik Jari</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput">
                        <i class="glyphicon glyphicon-file fileinput-exists"></i>
                        <span class="fileinput-filename"></span>
                    </div>
                    <span class="input-group-addon btn btn-warning btn-file">
                        <span class="fileinput-new" lang="id">Pilih Lampiran</span>
                        <span class="fileinput-exists" lang="id">Ubah</span>
                        <input type="file" name="sidikjarilampiran">
                    </span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" lang="id">Hapus</a>
                </div>
            </div>

        </div>

    </div>
</template>

<template id="keterangan">
    <div class="row">

        <div class="col-xs-12 col-md-12 borderbottom">

            <div class="row">

                <div class="col-xs-12 col-md-6 vdivide">

                    <!-- Informasi Lain -->
                    <div class="col-xs-12 col-md-12">
                        <p class="text-muted"><small><i lang="id">Informasi Lain</i></small></p>
                    </div>

                    <div class="col-xs-12 col-md-12">

                        <div class="form-group">
                            <label lang="id">Riwayat Pekerjaan / negara yang pernah dikunjungi (sebutkan tahun berapa, dalam rangka apa, dan negara mana yang dikunjungi)</label>
                            <textarea class="form-control input-sm" rows="2" name="riwayatpekerjaaninfo" id="riwayatpekerjaaninfo"></textarea>
                        </div>

                        <div class="form-group">
                            <label lang="id">Kesenangan / Kegemaran / Hobi</label>
                            <textarea class="form-control input-sm" rows="2" name="hobiinfo" id="hobiinfo"></textarea>
                        </div>

                        <div class="form-group">
                            <label lang="id">Alamat yang mudah dihubungi dan no. telepon</label>
                            <textarea class="form-control input-sm" rows="2" name="alamatinfo" id="alamatinfo"></textarea>
                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-md-6 ">

                    <!-- Sponsor -->
                    <div class="col-xs-12 col-md-12">
                        <p class="text-muted"><small><i lang="id">Sponsor (khusus orang asing)</i></small></p>
                    </div>

                    <div class="col-xs-12 col-md-12">

                        <div class="form-group">
                            <label lang="id">Disponsori oleh</label>
                            <input type="text" class="form-control input-sm" name="sponsorinfo" id="sponsorinfo">
                        </div>

                        <div class="form-group">
                            <label lang="id">Alamat Sponsor</label>
                            <textarea class="form-control input-sm" rows="2" name="sponsoralamatinfo" id="alamatinfo"></textarea>
                        </div>

                        <div class="form-group">
                            <label lang="id">Telp. / Fax</label>
                            <input type="text" class="form-control input-sm" name="sponsortelpfaxinfo" id="telpfaxinfo">
                        </div>

                        <div class="form-group">
                            <label lang="id">Jenis Usaha</label>
                            <input type="text" class="form-control input-sm" name="sponsorjenisusahainfo" id="jenisusahainfo">
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-xs-12 col-md-12">

            <div class="col-xs-12 col-md-6">
                <div class="form-group">
                    <label lang="id">Alamat Email</label>
                    <input type="email" class="form-control input-sm" name="email" id="email" style="text-transform: lowercase;">
                </div>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="checkagree" name="checkagree">
                        <span class="text-muted" lang="id">Keterangan yang saya buat dengan sebenarnya atas sumpah menurut kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak benar maka saya sanggup dituntut berdasarkan hukum yang berlaku.</span>
                    </label>
                </div>
            </div>

        </div>

    </div>
</template>