<?php




namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\DatasiswaModel as ModelsDatasiswaModel;
use CodeIgniter\Validation\Rules;

class Inputdatasiswa extends BaseController

{

    public function __construct()
    {
        $this->datasiswaModel = new \App\Models\DatasiswaModel();
    }

    public function index()

    {


        // $data_siswa = $data_siswaModel->findAll();



        $data = [
            'title' => 'INFO DATA',
            'data_siswa' => $this->datasiswaModel->getDatasiswa()
        ];


        //  cara konek db manual tanpa model
        // $db = \Config\Database::connect();
        // $data_siswa = $db->query("SELECT * FROM data_siswa");
        // dd($data_siswa);


        return view('infodata/inputdatasiswa', $data);
    }

    public function detail($id)
    {
        // $datasiswaModel = new ModelsDatasiswaModel();

        $data = [
            'title' => 'detail-siswa',
            'datasiswa' => $this->datasiswaModel->getdatasiswa($id)
        ];

        // jika komik tidak ada


        return view('infodata/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \config\Services::validation()
        ];

        return view('infodata/create', $data);
    }

    public function save()
    {

        // validation input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[data_siswa.nama]',
                'errors' => [
                    'required' => '{field} data siswa harus diisi.',
                    'is_unique' => '{field} data siswa sudah ada.'
                ]

            ],
            'nis' => [
                'rules' => 'required|is_unique[data_siswa.nis]',
                'errors' => [
                    'required' => '{field} data siswa harus diisi.',
                    'is_unique' => '{field} data siswa sudah ada.'
                ]

            ],
            'alamat_siswa' => [
                'rules' => 'required|is_unique[data_siswa.alamat_siswa]',
                'errors' => [
                    'required' => '{field} data siswa harus diisi.',
                    'is_unique' => '{field} data siswa sudah ada.'
                ]

            ],
            'jurusan' => [
                'rules' => 'required|is_unique[data_siswa.jurusan]',
                'errors' => [
                    'required' => '{field} data siswa harus diisi.',
                    'is_unique' => '{field} data siswa sudah ada.'
                ]

            ],
            'poto' => [
                'rules' => 'required|is_unique[data_siswa.poto]',
                'errors' => [
                    'required' => '{field} data siswa harus diisi.',
                    'is_unique' => '{field} data siswa sudah ada.'
                ]

            ],

        ])) {
            $validation = \config\Services::validation();
            return redirect()->to('/inputdatasiswa/create')->withInput()->with('validation', $validation);
        }



        $this->datasiswaModel->save([
            'Nama' => $this->request->getvar('nama'),
            'Nis' => $this->request->getvar('nis'),
            'Alamat_siswa' => $this->request->getvar('alamat_siswa'),
            'Jurusan' => $this->request->getVar('jurusan'),
            'poto' => $this->request->getVar('poto')

        ]);

        session()->setFlashdata('pesan', 'Data berhasil di tambakan.');

        return redirect()->to('/Inputdatasiswa');
    }
}
