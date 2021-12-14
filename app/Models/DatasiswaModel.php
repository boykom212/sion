<?php


namespace App\Models;

use CodeIgniter\Model;

class DatasiswaModel extends Model

{
    protected $table = 'data_siswa';
    protected $useTimetamps = true;
    protected $allowedFields = ['Nama', 'Nis', 'Alamat_siswa', 'Jurusan', 'Poto'];


    public function getDatasiswa($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
