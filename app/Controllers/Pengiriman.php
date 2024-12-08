<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PengirimanModel;
use App\Models\SalesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pengiriman extends BaseController
{
    protected $png;
    protected $sls; 
    public function __construct()
    {
        $this->png = new PengirimanModel();
        $this->sls = new SalesModel(); 
      
    }

    public function index()
    {
        $data['pengiriman'] = $this->png->findAll();
        return view('pengiriman/index', $data);
    }

    public function create()
    {
        $data['sales'] = $this->sls->findAll();
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->png->insert($item);
                return redirect()->to(base_url('pengiriman'));
            } catch (\Throwable $th) {
                
            }
        } else return view('pengiriman/create', $data);
        
    }

    public function edit($id = null)
{
    $data['pengiriman'] = $this->png->find($id);
    $data['sales'] = $this->sls->where('id', $id)->findAll();  
    $item = $this->request->getPost();

    if (isset($item['tanggal_pengiriman'])) {
        try {
            $this->png->update($id, $item);
            return redirect()->to(base_url('pengiriman'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('pengiriman/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->png->delete($id);
            return redirect()->to(base_url('pengiriman'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
