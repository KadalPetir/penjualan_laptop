<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LaptopModel;
use App\Models\SuppliersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Laptop extends BaseController
{
    protected $ltp;
    protected $sup; 
    public function __construct()
    {
        $this->ltp = new LaptopModel();
        $this->sup = new SuppliersModel(); 
      
    }

    public function index()
    {
        $data['laptop'] = $this->ltp->findAll();
        return view('laptop/index', $data);
    }

    public function create()
    {
        $data['suppliers'] = $this->sup->findAll();
        
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->ltp->insert($item);
                return redirect()->to(base_url('laptop'));
            } catch (\Throwable $th) {
                
            }
        } else return view('laptop/create', $data);
        
    }

    public function edit($id = null)
{
    $data['laptop'] = $this->ltp->find($id);
    $data['suppliers'] = $this->sup->where('id', $id)->findAll();  
    $item = $this->request->getPost();

    if (isset($item['brand'])) {
        try {
            $this->ltp->update($id, $item);
            return redirect()->to(base_url('laptop'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal mengupdate pesanan.');
        }
    }

    return view('laptop/edit', $data);
}
    public function delete($id = null)
    {
        try {
            $this->ltp->delete($id);
            return redirect()->to(base_url('laptop'));
        } catch (\Throwable $th) {
            session()->setFlashdata('error', 'Gagal menghapus pelanggan.');
        }
    }  
}
