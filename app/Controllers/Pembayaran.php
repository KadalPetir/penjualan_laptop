<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PembayaranModel;
use App\Models\SalesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pembayaran extends BaseController
{
    protected $pmb;
    protected $sls; 
    public function __construct()
    {
        $this->pmb = new PembayaranModel();
        $this->sls = new SalesModel(); 
      
    }

    public function index()
    {
        $data['pembayaran'] = $this->pmb->findAll();
        return view('pembayaran/index', $data);
    }

    public function create()
    {
        $data['sales'] = $this->sls->findAll();
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->pmb->insert($item);
                return redirect()->to(base_url('pembayaran'));
            } catch (\Throwable $th) {
                
            }
        } else return view('pembayaran/create', $data);
        
    }

    public function edit($id = null)
{
    $data['pembayaran'] = $this->pmb->find($id);
    $data['sales'] = $this->sls->where('id', $id)->findAll();  
    $item = $this->request->getPost();

    if (isset($item['jenis_pembayaran'])) {
        try {
            $this->pmb->update($id, $item);
            return redirect()->to(base_url('pembayaran'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('pembayaran/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->pmb->delete($id);
            return redirect()->to(base_url('pembayaran'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
