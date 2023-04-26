<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <form class="row g-3 mb-5" action="/list/save" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" <?= $title == 'Edit' ? 'value=' . $lists['id'] : ""; ?> />
        <div class="row ">
            <div class="col mt-5 d-flex align-item-center">
                <img src="/img/logo.png" alt="logo rs manyar" class="logo__img">
                <ul class="logo__list">
                    <li>RS Manyar Medical Centre</li>
                    <li>JL. Raya Manyar No. 9 Surabaya</li>
                    <li>Telp. 031-5999339, 5999369, Fax 031-5995284</li>
                    <li>Directline IGD. 031-59952349</li>
                </ul>
            </div>
            <div class="col-5 mt-5 d-flex flex-column gap-2 border p-3">
                <div class="row">
                    <label for="no_rm" class="col-sm-3 col-form-label col-form-label-sm">No.RM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="no_rm" name="no_rm"
                            value=<?= $title == 'Edit' ? $lists['no_rm'] : ''; ?>>
                    </div>
                </div>
                <div class="row">
                    <label for="nama_pasien" class="col-sm-3 col-form-label col-form-label-sm">Nama Pasien</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="nama_pasien" name="nama_pasien"
                            value=<?= $title == 'Edit' ? $lists['nama_pasien'] : ''; ?>>
                    </div>
                </div>
                <div class="row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label col-form-label-sm">Tgl. Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir"
                            value=<?= $title == 'Edit' ? $lists['tgl_lahir'] : ''; ?>>
                        Harap diisi atau tempelkan stiker jika ada
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                &nbsp;
            </div>
            <div class="card-body">
                <div class="row gx-5">
                    <div class="col">
                        <div class="row mb-2">
                            <label for="pengkajian_tgl" class="col-sm-3 col-form-label col-form-label-sm">Pengkajian
                                tgl</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control form-control-sm" id="pengkajian_tgl"
                                    name="pengkajian_tgl" value=<?= $title == 'Edit' ? $lists['pengkajian_tgl'] : ''; ?>>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="mrs_tanggal" class="col-sm-3 col-form-label col-form-label-sm">MRS
                                tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control form-control-sm" id="mrs_tanggal"
                                    name="mrs_tanggal" value=<?= $title == 'Edit' ? $lists['mrs_tanggal'] : ''; ?>>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="dx_masuk" class="col-sm-3 col-form-label col-form-label-sm">Dx.
                                Masuk</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control form-control-sm" id="dx_masuk" name="dx_masuk"
                                    value=<?= $title == 'Edit' ? $lists['dx_masuk'] : ''; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mb-2">
                            <label for="jam" class="col-sm-3 col-form-label col-form-label-sm">Jam</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control form-control-sm" id="jam" name="jam"
                                    value=<?= $title == 'Edit' ? $lists['jam'] : ''; ?>>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="agama" class="col-sm-3 col-form-label col-form-label-sm">Agama</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="agama" name="agama">
                                    <option selected>Pilih</option>
                                    <option value="islam" selected=<?= $title == 'Edit' && $lists['agama'] == 'islam' ? true : false; ?>>Islam</option>
                                    <option value="kristen" selected=<?= $title == 'Edit' && $lists['agama'] == 'kristen' ? true : false; ?>>Kristen</option>
                                    <option value="hindu" selected=<?= $title == 'Edit' && $lists['agama'] == 'hindu' ? true : false; ?>>Hindu</option>
                                    <option value="budha" selected=<?= $title == 'Edit' && $lists['agama'] == 'budha' ? true : false; ?>>Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="pendidikan" class="col-sm-3 col-form-label col-form-label-sm">Pendidikan</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="pendidikan" name="pendidikan">
                                    <option selected>Pilih</option>
                                    <option value="belum-sekolah" selected=<?= $title == 'Edit' && $lists['pendidikan'] == 'belum-sekolah' ? true : false; ?>>Belum sekolah</option>
                                    <option value="paud" selected=<?= $title == 'Edit' && $lists['pendidikan'] == 'paud' ? true : false; ?>>PAUD</option>
                                    <option value="tk" selected=<?= $title == 'Edit' && $lists['pendidikan'] == 'tk' ? true : false; ?>>TK</option>
                                    <option value="sd" selected=<?= $title == 'Edit' && $lists['pendidikan'] == 'sd' ? true : false; ?>>SD</option>
                                    <option value="smp" selected=<?= $title == 'Edit' && $lists['pendidikan'] == 'smp' ? true : false; ?>>SMP</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="form-radio-label" for="cara_masuk_rumah_sakit">
                        Cara masuk rumah sakit :
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" id="cara_masuk_rumah_sakit-1"
                                    name="cara_masuk_rumah_sakit" value="berjalan" <?= $title == 'Edit' && $lists['cara_masuk_rumah_sakit'] == 'berjalan' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="cara_masuk_rumah_sakit-1">
                                    Berjalan
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="cara_masuk_rumah_sakit-2"
                                    name="cara_masuk_rumah_sakit" value="menggunakan tongkat" <?= $title == 'Edit' && $lists['cara_masuk_rumah_sakit'] == 'menggunakan tongkat' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="cara_masuk_rumah_sakit-2">
                                    Menggunakan tongkat
                                </label>
                            </div>
                            <div class="col-7">
                                <input class="form-check-input" type="radio" id="cara_masuk_rumah_sakit-3"
                                    name="cara_masuk_rumah_sakit" value="menggunakan kursi roda / brankart"
                                    <?= $title == 'Edit' && $lists['cara_masuk_rumah_sakit'] == 'menggunakan kursi roda / brankart' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="cara_masuk_rumah_sakit-3">
                                    Menggunakan kursi roda / brankart
                                </label>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="row">
                    <label class="form-check-label" for="kemampuan_melakukan_aktifitas">
                        Kemampuan melakukan aktifitas sehari-hari :
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" id="kemampuan_melakukan_aktifitas-1"
                                    name="kemampuan_melakukan_aktifitas" value="mandiri" <?= $title == 'Edit' && $lists['kemampuan_melakukan_aktifitas'] == 'mandiri' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="kemampuan_melakukan_aktifitas-1">
                                    Mandiri
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="kemampuan_melakukan_aktifitas-2"
                                    name="kemampuan_melakukan_aktifitas" value="ketergantungan ringan"
                                    <?= $title == 'Edit' && $lists['kemampuan_melakukan_aktifitas'] == 'ketergantungan ringan' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="kemampuan_melakukan_aktifitas-2">
                                    Ketergantungan ringan
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="kemampuan_melakukan_aktifitas-3"
                                    name="kemampuan_melakukan_aktifitas" value="ketergantungan sedang"
                                    <?= $title == 'Edit' && $lists['kemampuan_melakukan_aktifitas'] == 'ketergantungan sedang' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="kemampuan_melakukan_aktifitas-3">
                                    Ketergantungan sedang
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="kemampuan_melakukan_aktifitas-4"
                                    name="kemampuan_melakukan_aktifitas" value="ketergantungan berat"
                                    <?= $title == 'Edit' && $lists['kemampuan_melakukan_aktifitas'] == 'ketergantungan berat' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="kemampuan_melakukan_aktifitas-4">
                                    Ketergantungan berat
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="kemampuan_melakukan_aktifitas-5"
                                    name="kemampuan_melakukan_aktifitas" value="total" <?= $title == 'Edit' && $lists['kemampuan_melakukan_aktifitas'] == 'total' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="kemampuan_melakukan_aktifitas-5">
                                    Total
                                </label>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="row">
                    <label class="form-check-label" for="informasi_didapat_dari">
                        Informasi didapat dari :
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" id="informasi_didapat_dari-1"
                                    name="informasi_didapat_dari" value="pasien" <?= $title == 'Edit' && $lists['informasi_didapat_dari'] == 'pasien' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="informasi_didapat_dari-1">
                                    Pasien
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" id="informasi_didapat_dari-2"
                                    name="informasi_didapat_dari" value="keluarga" <?= $title == 'Edit' && $lists['informasi_didapat_dari'] == 'keluarga' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="informasi_didapat_dari-2">
                                    Keluarga
                                </label>
                            </div>
                            <div class="col-7 d-flex align-item-center gap-1">
                                <input class="form-check-input" type="radio" id="informasi_didapat_dari-3"
                                    name="informasi_didapat_dari" value="orang lain" <?= $title == 'Edit' && $lists['informasi_didapat_dari'] == 'orang lain' ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="informasi_didapat_dari-3">
                                    Orang lain, hubungan dengan pasien:
                                </label>
                                <input type="text" class="form-control form-control-sm w-50"
                                    id="hubungan_dengan_pasien-3">
                            </div>
                        </div>
                    </label>
                </div>
            </div>

            <div class="card-header border-top">A. RIWAYAT KESEHATAN</div>
            <div class="card-body">
                <div class="row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">1. Keluhan utama</label>
                    <div class="col-sm-9">
                        <textarea class="form-control form-control-sm"
                            name="keluhan_utama"><?= $title == 'Edit' ? $lists['keluhan_utama'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="row my-2">
                    <label class="col-sm-3 col-form-label col-form-label-sm">2. Riwayat penyakit sekarang</label>
                    <div class="col-sm-9">
                        <textarea class="form-control form-control-sm"
                            name="riwayat_penyakit_sekarang"><?= $title == 'Edit' ? $lists['riwayat_penyakit_sekarang'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">3. Riwayat penyakit dahulu</label>
                    <div class="col-sm-9">
                        <textarea class="form-control form-control-sm"
                            name="riwayat_penyakit_dahulu"><?= $title == 'Edit' ? $lists['riwayat_penyakit_dahulu'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="row my-2">
                    <label class="col-sm-3 col-form-label col-form-label-sm" for="riwayat_alergi">4. Riwayat
                        alergi</label>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_alergi-1" name="riwayat_alergi"
                            value="ya" <?= $title == 'Edit' && $lists['riwayat_alergi'] == 'ya' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat-alergi-1">
                            Ya, jenis:
                        </label>
                        <input type="text" class="form-control form-control-sm w-50" />
                    </div>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_alergi-2" name="riwayat_alergi"
                            value="reaksi" <?= $title == 'Edit' && $lists['riwayat_alergi'] == 'reaksi' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat-alergi-2">
                            Reaksi:
                        </label>
                        <input type="text" class="form-control form-control-sm w-50" />
                    </div>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_alergi-3" name="riwayat_alergi"
                            value="tidak" <?= $title == 'Edit' && $lists['riwayat_alergi'] == 'tidak' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat-alergi-3">
                            Tidak
                        </label>
                    </div>
                </div>

                <div class="row my-2">
                    <label class="col-sm-3 col-form-label col-form-label-sm" for="riwayat_operasi">5. Riwayat
                        operasi</label>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_operasi-1" name="riwayat_operasi"
                            value="ya" <?= $title == 'Edit' && $lists['riwayat_operasi'] == 'ya' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat-operasi-1">
                            Ya, jenis:
                        </label>
                        <input type="text" class="form-control form-control-sm w-50" />
                    </div>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_operasi-2" name="riwayat_operasi"
                            value="tidak" <?= $title == 'Edit' && $lists['riwayat_operasi'] == 'tidak' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat-operasi-2">
                            Tidak
                        </label>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">6. Riwayat penyakit keluarga</label>
                    <div class="col-sm-9">
                        <textarea class="form-control form-control-sm"
                            name="riwayat_penyakit_keluarga"><?= $title == 'Edit' ? $lists['riwayat_penyakit_keluarga'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="row my-2">
                    <label class="col-sm-3 col-form-label col-form-label-sm" for="riwayat_transfusi_darah">7. Riwayat
                        transfusi darah</label>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_transfusi_darah-1"
                            name="riwayat_transfusi_darah" value="ya" <?= $title == 'Edit' && $lists['riwayat_transfusi_darah'] == 'ya' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat_transfusi_darah-1">
                            Ya, jenis:
                        </label>
                        <input type="text" class="form-control form-control-sm w-50" />
                    </div>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_transfusi_darah-2"
                            name="riwayat_transfusi_darah" value="reaksi" <?= $title == 'Edit' && $lists['riwayat_transfusi_darah'] == 'reaksi' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat_transfusi_darah-2">
                            Reaksi:
                        </label>
                        <input type="text" class="form-control form-control-sm w-50" />
                    </div>
                    <div class="col d-flex align-item-center gap-1">
                        <input class="form-check-input" type="radio" id="riwayat_transfusi_darah-3"
                            name="riwayat_transfusi_darah" value="tidak" <?= $title == 'Edit' && $lists['riwayat_transfusi_darah'] == 'tidak' ? 'checked' : ''; ?> />
                        <label class="form-check-label" for="riwayat_transfusi_darah-3">
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>