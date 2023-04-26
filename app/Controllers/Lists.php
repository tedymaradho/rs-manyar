<?php
namespace App\Controllers;

use App\Models\ListsModel;

class Lists extends BaseController
{
    protected $listsModel;

    public function __construct()
    {
        $this->listsModel = new ListsModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function lists()
    {
        $data = [
            'title' => 'Lists',
            'lists' => $this->listsModel->getLists()
        ];
        return view('pages/lists', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit',
            'lists' => $this->listsModel->getLists($id)
        ];
        return view('pages/home', $data);
    }

    public function delete($id)
    {
        $this->listsModel->delete($id);

        session()->setFlashdata("pesan", "Data berhasil dihapus");

        return redirect()->to('/lists');
    }

    public function save()
    {
        if ($this->request->getVar('id') != "") {
            $this->listsModel->save([
                'id' => $this->request->getVar('id'),
                'no_rm' => $this->request->getVar('no_rm'),
                'nama_pasien' => $this->request->getVar('nama_pasien'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'pengkajian_tgl' => $this->request->getVar('pengkajian_tgl'),
                'mrs_tanggal' => $this->request->getVar('mrs_tanggal'),
                'dx_masuk' => $this->request->getVar('dx_masuk'),
                'jam' => $this->request->getVar('jam'),
                'agama' => $this->request->getVar('agama'),
                'pendidikan' => $this->request->getVar('pendidikan'),
                'cara_masuk_rumah_sakit' => $this->request->getVar('cara_masuk_rumah_sakit'),
                'kemampuan_melakukan_aktifitas' => $this->request->getVar('kemampuan_melakukan_aktifitas'),
                'informasi_didapat_dari' => $this->request->getVar('informasi_didapat_dari'),
                'keluhan_utama' => $this->request->getVar('keluhan_utama'),
                'riwayat_penyakit_sekarang' => $this->request->getVar('riwayat_penyakit_sekarang'),
                'riwayat_penyakit_dahulu' => $this->request->getVar('riwayat_penyakit_dahulu'),
                'riwayat_alergi' => $this->request->getVar('riwayat_alergi'),
                'riwayat_operasi' => $this->request->getVar('riwayat_operasi'),
                'riwayat_penyakit_keluarga' => $this->request->getVar('riwayat_penyakit_keluarga'),
                'riwayat_transfusi_darah' => $this->request->getVar('riwayat_transfusi_darah'),
            ]);

            session()->setFlashdata('pesan', 'Data berhasil diubah');

        } else {
            $this->listsModel->save([
                'no_rm' => $this->request->getVar('no_rm'),
                'nama_pasien' => $this->request->getVar('nama_pasien'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'pengkajian_tgl' => $this->request->getVar('pengkajian_tgl'),
                'mrs_tanggal' => $this->request->getVar('mrs_tanggal'),
                'dx_masuk' => $this->request->getVar('dx_masuk'),
                'jam' => $this->request->getVar('jam'),
                'agama' => $this->request->getVar('agama'),
                'pendidikan' => $this->request->getVar('pendidikan'),
                'cara_masuk_rumah_sakit' => $this->request->getVar('cara_masuk_rumah_sakit'),
                'kemampuan_melakukan_aktifitas' => $this->request->getVar('kemampuan_melakukan_aktifitas'),
                'informasi_didapat_dari' => $this->request->getVar('informasi_didapat_dari'),
                'keluhan_utama' => $this->request->getVar('keluhan_utama'),
                'riwayat_penyakit_sekarang' => $this->request->getVar('riwayat_penyakit_sekarang'),
                'riwayat_penyakit_dahulu' => $this->request->getVar('riwayat_penyakit_dahulu'),
                'riwayat_alergi' => $this->request->getVar('riwayat_alergi'),
                'riwayat_operasi' => $this->request->getVar('riwayat_operasi'),
                'riwayat_penyakit_keluarga' => $this->request->getVar('riwayat_penyakit_keluarga'),
                'riwayat_transfusi_darah' => $this->request->getVar('riwayat_transfusi_darah'),
            ]);

            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        }

        return redirect()->to('/lists');
    }
}