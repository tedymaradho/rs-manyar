<?php
namespace App\Models;

use CodeIgniter\Model;

class ListsModel extends Model
{
    protected $table = 'tb_pengkajian';
    protected $allowedFields = ['id', 'no_rm', 'nama_pasien', 'tgl_lahir', 'pengkajian_tgl', 'mrs_tanggal', 'dx_masuk', 'jam', 'agama', 'pendidikan', 'cara_masuk_rumah_sakit', 'kemampuan_melakukan_aktifitas', 'informasi_didapat_dari', 'keluhan_utama', 'riwayat_penyakit_sekarang', 'riwayat_penyakit_dahulu', 'riwayat_alergi', 'riwayat_operasi', 'riwayat_penyakit_keluarga', 'riwayat_transfusi_darah'];

    public function getLists($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}